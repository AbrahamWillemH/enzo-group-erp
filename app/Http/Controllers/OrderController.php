<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Packaging;
use App\Models\SeminarKit;
use App\Models\Souvenir;
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
        'Finishing',
        'Selesai'
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

        // $seminarkits = SeminarKit::all()->map(function ($item) {
        //     $item->setAttribute('type', 'seminar_kit');
        //     return $item;
        // });

        $packagings = Packaging::all()->map(function ($item) {
            $item->setAttribute('type', 'packaging');
            return $item;
        });

        $orders = $invitations
        ->concat($souvenirs)
        // ->concat($seminarkits)
        ->concat($packagings);

        return $orders;
    }


    private function updateOrderProgress($order, $id, $progress)
    {
        $modelClass = match($order->type) {
            'invitation' => Invitation::class,
            'souvenir' => Souvenir::class,
            'seminar_kit' => SeminarKit::class,
            'packaging' => Packaging::class,
        };

        $modelClass::where('id', $id)->update(['progress' => $progress]);
    }

    public function updateProgress(Request $request, $id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $orders = $this->getOrders();
        $order = $orders->firstWhere('id', $id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        if ($order->progress == 'Fix') {
            $deadlineDate = $request->input('deadline_date');
            if ($deadlineDate == NULL){
                return redirect()->back();
            }

            $deadlineCount = $orders->where('deadline_date', $deadlineDate)->count();

            if ($deadlineCount >= 5){
                return redirect()->back()->with('error', 'Terlalu banyak deadline pada ' . Carbon::parse($deadlineDate)->format('d/m/Y'));
            } else{
                $order->deadline_date = $deadlineDate;
                $order->save();
            }

        }

        $currentProgressIndex = array_search($order->progress, $this->progressStages);

        if ($currentProgressIndex === false || $currentProgressIndex == count($this->progressStages) - 1) {
            return redirect()->back()->with('info', 'This order is already completed.');
        }

        $nextProgress = $this->progressStages[$currentProgressIndex + 1];
        $this->updateOrderProgress($order, $id, $nextProgress);

        return redirect()->back()->with('success', 'Order progress updated to ' . $nextProgress);
    }

    public function previousProgress($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $orders = $this->getOrders();
        $order = $orders->firstWhere('id', $id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        if ($order->progress == 'Fix' || $order->progress == 'Pemesanan Bahan') {
            $order->deadline_date = NULL;
            $order->save();
        }

        $currentProgressIndex = array_search($order->progress, $this->progressStages);

        if ($currentProgressIndex === false || $currentProgressIndex == 0) {
            return redirect()->back()->with('info', 'This order is already at the first progress stage.');
        }

        $previousProgress = $this->progressStages[$currentProgressIndex - 1];
        $this->updateOrderProgress($order, $id, $previousProgress);

        return redirect()->back()->with('success', 'Order progress reverted to ' . $previousProgress);
    }
    public function orderDetails($id){
        $invitation = DB::table('invitation')->where('id', $id)->first();
        $packaging = DB::table('packaging')->where('id', $id)->first();
        $seminarkit = DB::table('seminarkit')->where('id', $id)->first();
        $souvenir = DB::table('souvenir')->where('id', $id)->first();

        if ($invitation) {
            return app(InvitationController::class)->invitationDetails($id);
        }
        if ($packaging) {
            return app(PackagingController::class)->packagingDetails($id);
        }
        if ($seminarkit) {
            return app(SeminarKitController::class)->seminarkitDetails($id);
        }
        if ($souvenir) {
            return app(SouvenirController::class)->souvenirDetails($id);
        }
    }

    public function reminder()
    {
        $reminderDays = 21;
        $today = Carbon::today()->toDateString();

        // Ambil data dari masing-masing tabel dengan filter berdasarkan deadline
        $invitations = Invitation::where('progress', '!=', 'Selesai')
        ->whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
        ->get()
        ->map(function ($item) {
            $item->type = 'invitation';
            return $item;
        });

        $souvenirs = Souvenir::where('progress', '!=', 'Selesai')
            ->whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
            ->get()
            ->map(function ($item) {
                $item->type = 'souvenir';
                return $item;
            });


        // $seminarkits = SeminarKit::whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
        //     ->get()
        //     ->map(function ($item) {
        //         $item->type = 'seminarkit';
        //         return $item;
        //     });

        $packagings = Packaging::where('progress', '!=', 'Selesai')
            ->whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
            ->get()
            ->map(function ($item) {
                $item->type = 'packaging';
                return $item;
            });

        // Gabungkan semua data
        $orders = $invitations
            ->concat($souvenirs)
            // ->concat($seminarkits)
            ->concat($packagings);

        $sortedOrders = $orders->sortBy('deadline_date');

        // Kirim data ke view
        return view('admin.reminder', ['orders' => $sortedOrders]);
    }

    public function reminderDetail($id) {
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
            $item->setAttribute('type', 'Invitation');
            return $item;
        });

        $souvenirs = Souvenir::where('user_id', auth()->id())->get()->map(function ($item) {
            $item->setAttribute('type', 'Souvenir');
            return $item;
        });

        $seminarkits = SeminarKit::where('user_id', auth()->id())->get()->map(function ($item) {
            $item->setAttribute('type', 'seminar_kit');
            return $item;
        });

        $packagings = Packaging::where('user_id', auth()->id())->get()->map(function ($item) {
            $item->setAttribute('type', 'Packaging');
            return $item;
        });

        return $invitations
            ->concat($souvenirs)
            ->concat($seminarkits)
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

            case 'seminar_kit':
                $order = SeminarKit::with(['user'])->findOrFail($id);
                return view('user.seminarkit_detail', compact('order'));

            default:
                abort(404);
        }
    }

    public function calendar(){
        return view('admin.calendar');
    }

    public function getDeadlines()
    {
        $invitations = Invitation::select('id', 'user_name', 'type', 'deadline_date')->get();
        $souvenirs = Souvenir::select('id', 'user_name', 'type', 'deadline_date')->get();
        $packagings = Packaging::select('id', 'user_name', 'type', 'deadline_date')->get();

        $orders = $invitations->concat($souvenirs)->concat($packagings);

        // Format data untuk kalender
        $events = $orders->map(function ($order) {
            return [
                'id' => $order->id,
                'title' => $order->user_name. ' - ' . ucwords(strtolower($order->type)),
                'start' => $order->deadline_date,
            ];
        });

        return response()->json($events);
    }
}
