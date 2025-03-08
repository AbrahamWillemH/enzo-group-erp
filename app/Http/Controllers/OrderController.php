<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\InvitationChange;
use App\Models\Packaging;
use App\Models\PackagingChange;
use App\Models\SeminarKit;
use App\Models\Souvenir;
use App\Models\SouvenirChange;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private array $progressStages = [
        'Pending',
        'Fix',
        'Pemesanan Bahan',
        'Proses Produksi',
        'Selesai',
        'Selesai Beneran',
    ];

    private function getOrders()
    {
        $invitations = Invitation::all()->map(function ($item) {
            $item->setAttribute('type', 'invitation');

            return $item;
        });

        $souvenirs = Souvenir::all()->map(function ($item) {
            $item->setAttribute('type', 'souvenir');

            return $item;
        });

        $packagings = Packaging::all()->map(function ($item) {
            $item->setAttribute('type', 'packaging');

            return $item;
        });

        $orders = $invitations
            ->concat($souvenirs)
            ->concat($packagings);

        return $orders;
    }

    private function updateOrderProgress($order, $id, $progress)
    {
        $modelClass = match ($order->type) {
            'invitation' => Invitation::class,
            'souvenir' => Souvenir::class,
            'packaging' => Packaging::class,
        };

        $updateData = ['progress' => $progress];

        if ($progress === 'Selesai Beneran') {
            $updateData['done_at'] = now();
        }

        $modelClass::where('id', $id)->update($updateData);
    }

    public function deadlineChange(Request $request, $id, $order)
    {
        $modelClass = match ($order) {
            'invitation' => Invitation::class,
            'souvenir' => Souvenir::class,
            'packaging' => Packaging::class,
            default => null,
        };

        $changeModelClass = match ($order) {
            'invitation' => InvitationChange::class,
            'souvenir' => SouvenirChange::class,
            'packaging' => PackagingChange::class,
            default => null,
        };

        if (! $modelClass || ! $changeModelClass) {
            return redirect()->back()->with('error', 'Invalid order type');
        }

        // Ambil data lama
        $orderInstance = $modelClass::findOrFail($id);
        $oldValue = $orderInstance->deadline_date;

        // Ambil nilai baru dari request
        $newValue = $request->deadline_date_input;

        // Jika tidak ada perubahan, langsung kembali tanpa menyimpan
        if ($oldValue == $newValue) {
            return redirect()->back()->with('info', 'No changes detected');
        }

        // Update data di tabel utama
        $orderInstance->update(['deadline_date' => $newValue]);

        // Simpan perubahan ke tabel perubahan
        $changeModelClass::create([
            "{$order}_id" => $id, // Misalnya 'souvenir_id', 'invitation_id'
            'column_name' => 'deadline_date',
            'old_value' => $oldValue ?? '(kosong)', // Jika null, tampilkan "(kosong)"
            'new_value' => $newValue,
            'created_at' => now(),
            'updated_at' => now(),
            'changer_name' => auth()->user()->name,
        ]);

        return redirect()->back()->with('success', 'Deadline updated successfully');
    }

    public function designDeadlineChange(Request $request, $id, $order)
    {
        $modelClass = match ($order) {
            'invitation' => Invitation::class,
            'souvenir' => Souvenir::class,
            'packaging' => Packaging::class,
            default => null,
        };

        $changeModelClass = match ($order) {
            'invitation' => InvitationChange::class,
            'souvenir' => SouvenirChange::class,
            'packaging' => PackagingChange::class,
            default => null,
        };

        if (! $modelClass || ! $changeModelClass) {
            return redirect()->back()->with('error', 'Invalid order type');
        }

        // Ambil data lama
        $orderInstance = $modelClass::findOrFail($id);
        $oldValue = $orderInstance->design_deadline_date;

        // Ambil nilai baru
        $newValue = $request->design_deadline_date_input;

        // Jika tidak ada perubahan, langsung kembali tanpa menyimpan
        if ($oldValue == $newValue) {
            return redirect()->back()->with('info', 'No changes detected');
        }

        // Update data di tabel utama
        $orderInstance->update(['design_deadline_date' => $newValue]);

        // Simpan perubahan ke tabel perubahan
        $changeModelClass::create([
            "{$order}_id" => $id, // Misalnya 'souvenir_id', 'invitation_id'
            'column_name' => 'design_deadline_date',
            'old_value' => $oldValue ?? '(kosong)', // Jika null, tampilkan "(kosong)"
            'new_value' => $newValue,
            'created_at' => now(),
            'updated_at' => now(),
            'changer_name' => auth()->user()->name,
        ]);

        return redirect()->back()->with('success', 'Design deadline updated successfully');
    }

    public function updateProgress(Request $request, $id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $orders = $this->getOrders();
        $order = $orders->firstWhere('id', $id);

        if (! $order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $oldProgress = $order->progress;
        $currentProgressIndex = array_search($order->progress, $this->progressStages);

        if ($currentProgressIndex === false || $currentProgressIndex == count($this->progressStages) - 1) {
            return redirect()->back()->with('info', 'This order is already completed.');
        }

        $nextProgress = $this->progressStages[$currentProgressIndex + 1]; // Definisikan di awal sebelum digunakan

        if ($order->progress == 'Fix') {
            $deadlineDate = $request->input('deadline_date');
            if ($deadlineDate == null) {
                return redirect()->back();
            }

            $deadlineCount = $orders->where('deadline_date', $deadlineDate)->count();

            if ($deadlineCount >= 5) {
                return redirect()->back()->with('error', 'Terlalu banyak deadline pada '.Carbon::parse($deadlineDate)->format('d/m/Y'));
            } else {
                $order->deadline_date = $deadlineDate;
                $order->save();
            }
        }

        // Update progress
        $this->updateOrderProgress($order, $id, $nextProgress);

        $modelChange = 'App\\Models\\' . ucfirst($order->type) . 'Change';

        // Pastikan class model ada sebelum digunakan
        if (class_exists($modelChange)) {
            $modelChange::create([
                "{$order->type}_id" => $id, // Misalnya 'invitation_id', 'souvenir_id', atau 'packaging_id'
                'column_name' => 'progress',
                'old_value' => $oldProgress,
                'new_value' => $nextProgress,
                'changer_name' => auth()->user()->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Order progress updated to '.$nextProgress);
    }

    public function previousProgress($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $orders = $this->getOrders();
        $order = $orders->firstWhere('id', $id);

        if (! $order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $oldProgress = $order->progress;

        $currentProgressIndex = array_search($order->progress, $this->progressStages);

        if ($currentProgressIndex === false || $currentProgressIndex == 0) {
            return redirect()->back()->with('info', 'This order is already at the first progress stage.');
        }

        $previousProgress = $this->progressStages[$currentProgressIndex - 1];

        // Jika kembali ke progress sebelum Fix atau Pemesanan Bahan, reset deadline
        if ($order->progress == 'Fix' || $order->progress == 'Pemesanan Bahan') {
            $order->deadline_date = null;
            $order->save();

            // Simpan perubahan deadline ke tabel perubahan
            $modelChange = 'App\\Models\\' . ucfirst($order->type) . 'Change';

            if (class_exists($modelChange)) {
                $modelChange::create([
                    "{$order->type}_id" => $id,
                    'column_name' => 'deadline_date',
                    'old_value' => $order->getOriginal('deadline_date') ?? '(kosong)',
                    'new_value' => '(kosong)',
                    'changer_name' => auth()->user()->name,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Update progress
        $this->updateOrderProgress($order, $id, $previousProgress);

        // Simpan perubahan progress ke tabel perubahan sesuai tipe order
        $modelChange = 'App\\Models\\' . ucfirst($order->type) . 'Change';

        if (class_exists($modelChange)) {
            $modelChange::create([
                "{$order->type}_id" => $id,
                'column_name' => 'progress',
                'old_value' => $oldProgress,
                'new_value' => $previousProgress,
                'changer_name' => auth()->user()->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Order progress reverted to '.$previousProgress);
    }

    public function orderDetails($id, $order)
    {
        $modelClass = match ($order) {
            'invitation' => Invitation::class,
            'souvenir' => Souvenir::class,
            'packaging' => Packaging::class,
            default => null,
        };

        if ($modelClass == Invitation::class) {
            return app(InvitationController::class)->invitationDetails($id);
        }
        if ($modelClass == Packaging::class) {
            return app(PackagingController::class)->packagingDetails($id);
        }
        if ($modelClass == Souvenir::class) {
            return app(SouvenirController::class)->souvenirDetails($id);
        }
    }

    public function reminderDetail($id)
    {
        $invitation = Invitation::find($id);
        if ($invitation) {
            $invitation->type = 'invitation';
            $purchase = DB::table('purchase_invitation')
                ->where('invitation_id', $id)
                ->get()
                ->map(function ($item) {
                    $item->date = Carbon::parse($item->date)->format('d/m/Y');

                    return $item;
                });

            return view('admin.invitation_detail', compact('invitation', 'purchase'));
        }

        $souvenir = Souvenir::find($id);
        if ($souvenir) {
            $souvenir->type = 'souvenir';
            $purchase = DB::table('purchase_souvenir')
                ->where('souvenir_id', $id)
                ->get()
                ->map(function ($item) {
                    $item->date = Carbon::parse($item->date)->format('d/m/Y');

                    return $item;
                });

            return view('admin.souvenir_detail', compact('souvenir', 'purchase'));
        }

        // $seminarKit = SeminarKit::find($id);
        // if ($seminarKit) {
        //     $seminarKit->type = 'seminar_kit';
        //     return view('admin.seminarkit_detail', ['order' => $seminarKit]);
        // }

        $packaging = Packaging::find($id);
        if ($packaging) {
            $packaging->type = 'packaging';
            $purchase = DB::table('purchase_packaging')
                ->where('packaging_id', $id)
                ->get()
                ->map(function ($item) {
                    $item->date = Carbon::parse($item->date)->format('d/m/Y');

                    return $item;
                });

            return view('admin.packaging_detail', compact('packaging', 'purchase'));
        }

        return redirect()->back()->with('error', 'Order not found');
    }

    private function getOrdersUser()
    {
        $invitations = Invitation::where('user_id', auth()->id())->get()->map(function ($item) {
            $item->setAttribute('type', 'invitation');

            return $item;
        });

        $souvenirs = Souvenir::where('user_id', auth()->id())->get()->map(function ($item) {
            $item->setAttribute('type', 'souvenir');

            return $item;
        });

        // $seminarkits = SeminarKit::where('user_id', auth()->id())->get()->map(function ($item) {
        //     $item->setAttribute('type', 'seminar_kit');
        //     return $item;
        // });

        $packagings = Packaging::where('user_id', auth()->id())->get()->map(function ($item) {
            $item->setAttribute('type', 'packaging');

            return $item;
        });

        return $invitations
            ->concat($souvenirs)
            ->concat($packagings);
    }

    public function showOrders()
    {
        $orders = $this->getOrdersUser();

        return view('user.progress_order', compact('orders'));
    }

    public function showOrderDetail($type, $id)
    {
        $order = null;

        switch ($type) {
            case 'invitation':
                $order = Invitation::with(['user'])->findOrFail($id);

                return view('user.invitation_detail', compact('order'));

            case 'souvenir':
                $order = Souvenir::with(['user'])->findOrFail($id);

                return view('user.souvenir_detail', compact('order'));

            case 'packaging':
                $order = Packaging::with(['user'])->findOrFail($id);

                return view('user.packaging_detail', compact('order'));

                // case 'seminar_kit':
                //     $order = SeminarKit::with(['user'])->findOrFail($id);
                //     return view('user.seminarkit_detail', compact('order'));

            default:
                abort(404);
        }
    }

    public function acceptImage($id)
    {
        $found = false;

        $invitation = Invitation::find($id);
        if ($invitation) {
            $invitation->design_status = 'ACC';
            $invitation->save();
            $found = true;
        }

        $souvenir = Souvenir::find($id);
        if ($souvenir) {
            $souvenir->design_status = 'ACC';
            $souvenir->save();
            $found = true;
        }

        $packaging = Packaging::find($id);
        if ($packaging) {
            $packaging->design_status = 'ACC';
            $packaging->save();
            $found = true;
        }

        if (! $found) {
            return redirect()->back()->with('error', 'Order tidak ditemukan.');
        }

        return redirect()->route('orders.view')->with('success', 'Desain telah disetujui.');
    }

    public function declineImage($id)
    {
        $found = false;

        $invitation = Invitation::find($id);
        if ($invitation) {
            $invitation->design_status = 'DECL';
            $invitation->save();
            $found = true;
        }

        $souvenir = Souvenir::find($id);
        if ($souvenir) {
            $souvenir->design_status = 'DECL';
            $souvenir->save();
            $found = true;
        }

        $packaging = Packaging::find($id);
        if ($packaging) {
            $packaging->design_status = 'DECL';
            $packaging->save();
            $found = true;
        }

        if (! $found) {
            return redirect()->back()->with('error', 'Order tidak ditemukan.');
        }

        return redirect()->route('orders.view')->with('success', 'Desain telah ditolak.');
    }

    public function finishedOrders()
    {
        $orders = $this->getOrders();
        $filteredOrders = $orders->filter(function ($order) {
            return isset($order->progress) && $order->progress === 'Selesai Beneran';
        });

        return view('admin.orders_done', compact('filteredOrders'));
    }

    public function deleteOrder($id)
    {
        $orders = $this->getOrders();

        $order = $orders->firstWhere('id', $id);

        if ($order) {
            $order->delete();

            return redirect()->back()->with('Success delete data');
        } else {
            return redirect()->back()->with('Success delete data');
        }
    }

    public function finishDateChange(Request $request, $id, $order)
    {
        $modelClass = match ($order) {
            'invitation' => Invitation::class,
            'souvenir' => Souvenir::class,
            'packaging' => Packaging::class,
            default => null,
        };

        $changeModelClass = match ($order) {
            'invitation' => InvitationChange::class,
            'souvenir' => SouvenirChange::class,
            'packaging' => PackagingChange::class,
            default => null,
        };

        if (! $modelClass || ! $changeModelClass) {
            return redirect()->back()->with('error', 'Invalid order type');
        }

        // Ambil data lama
        $orderInstance = $modelClass::findOrFail($id);
        $oldValue = $orderInstance->finish_date;

        // Ambil nilai baru dari request
        $newValue = $request->finish_date_input;

        // Jika tidak ada perubahan, langsung kembali tanpa menyimpan
        if ($oldValue == $newValue) {
            return redirect()->back()->with('info', 'No changes detected');
        }

        // Update data di tabel utama
        $orderInstance->update(['finish_date' => $newValue]);

        // Simpan perubahan ke tabel perubahan
        $changeModelClass::create([
            "{$order}_id" => $id, // Misalnya 'souvenir_id', 'invitation_id'
            'column_name' => 'finish_date',
            'old_value' => $oldValue ?? '(kosong)', // Jika null, tampilkan "(kosong)"
            'new_value' => $newValue,
            'created_at' => now(),
            'updated_at' => now(),
            'changer_name' => auth()->user()->name,
        ]);

        return redirect()->back()->with('success', 'Finish date updated successfully');
    }
}
