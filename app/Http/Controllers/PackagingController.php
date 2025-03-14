<?php

namespace App\Http\Controllers;

use App\Models\Packaging;
use App\Models\PackagingChange;
use App\Models\PackagingSPK;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as IlluminateDB;
use Schema;
use Storage;
use Validator;

class PackagingController extends Controller
{
    public function index(Request $request)
    {
        $packaging = Packaging::query();
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'alphabetical':
                    $packaging->orderBy('user_name', 'asc');
                    break;
                case 'order':
                    $packaging->orderBy('created_at', 'asc');
                    break;
                case 'deadline':
                    $packaging->orderBy('deadline_date', 'asc');
                    break;
                default:
                    $packaging->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            $packaging->orderBy('created_at', 'desc');
        }

        $packaging = $packaging->get();

        return view('admin.packaging', compact('packaging'));
    }

    public function create()
    {
        return view('user.orders.packaging_create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'quantity' => 'required|integer',
            'deadline_date' => 'nullable|date',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|array',
            'model' => 'required|string|max:255',
            'package_type' => 'required|string|max:255',
            'note_design' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'kemas' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'percetakan' => 'nullable|string|max:255',
            'request' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Proses simpan data jika validasi berhasil
        $validated = $validator->validated();
        $validated['finishing'] = implode(', ', $request->input('finishing'));
        $user = auth()->user();
        $order = new Packaging($validated);
        $order->user_id = $user->id;
        $order->type = 'packaging';
        $order->id = Packaging::generatePackagingId();
        $spk = new PackagingSPK();
        $spk->packaging_id = $order->id;

        $order->save();
        $spk->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $packaging = Packaging::findOrFail($id);

        // dd($packaging);
        return view('admin.packaging_edit', compact('packaging'));
    }

    public function update(Request $request, $id)
    {
        $finishing = json_decode($request->finishing);
        $request->merge(['finishing' => $finishing]);

        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'quantity' => 'required|integer',
            'deadline_date' => 'nullable|date',
            'progress' => 'required|string',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|array|min:1',
            'model' => 'required|string',
            'package_type' => 'required|string',
            'size' => 'required|string',
            'note_design' => 'nullable|string',
            'payment_status' => 'nullable|string',
            'price_per_pcs' => 'nullable|string',
            'printout' => 'nullable|string',
            'dp1_date' => 'nullable|date',
            'dp2_date' => 'nullable|date',
            'paid_off_date' => 'nullable|date',
            'fix_design_date' => 'nullable|date',
            'expedition' => 'nullable|string',
            'design_status' => 'nullable|string',
            'note_cs' => 'nullable|string',
            'desain_path' => 'nullable|mimes:jpg,jpeg,png,pdf',
            'subprocess' => 'nullable|enum',
            'kemas' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'percetakan' => 'nullable|string|max:255',
            'request' => 'nullable|string|max:255',
            'size_fix' => 'nullable|string',
        ]);

        $order = Packaging::findOrFail($id);

        // Simpan perubahan ke dalam PackagingChange
        foreach ($validated as $column => $newValue) {
            $oldValue = $order->$column;

            if ($oldValue != $newValue) {
                PackagingChange::create([
                    'packaging_id' => $order->id,
                    'column_name' => $column,
                    'old_value' => is_array($oldValue) ? implode(', ', $oldValue) : $oldValue,
                    'new_value' => is_array($newValue) ? implode(', ', $newValue) : $newValue,
                    'changer_name' => auth()->user()->name,
                ]);
            }
        }

        // Handle file desain_path
        if ($request->hasFile('desain_path') && $request->file('desain_path')->isValid()) {
            if ($order->desain_path && Storage::exists($order->desain_path)) {
                Storage::delete($order->desain_path);
            }
            $file = $request->file('desain_path');
            $fileName = $order->user_name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('packaging', $fileName, 'public');

            // Simpan perubahan desain_path
            PackagingChange::create([
                'packaging_id' => $order->id,
                'column_name' => 'desain_path',
                'old_value' => $order->desain_path,
                'new_value' => $filePath,
            ]);

            $validated['desain_path'] = $filePath;
            $validated['design_status'] = 'Pending';
        }

        $validated['finishing'] = implode(', ', $finishing);

        // Update data
        $order->update($validated);

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function packagingDetails($id)
    {
        $packaging_spk = IlluminateDB::table('spk_packaging')
            ->where('packaging_id', $id)
            ->first();

        if ($packaging_spk) {
            $packaging_spk->nama_bahan = json_decode($packaging_spk->nama_bahan, true);
            $packaging_spk->ukuran = json_decode($packaging_spk->ukuran, true);
            $packaging_spk->kebutuhan = json_decode($packaging_spk->kebutuhan, true);
            $packaging_spk->stok = json_decode($packaging_spk->stok, true);
            $packaging_spk->jumlah_beli = json_decode($packaging_spk->jumlah_beli, true);
            $packaging_spk->supplier = json_decode($packaging_spk->supplier, true);
        }

        $packaging = DB::table('packaging')->find($id);

        $packaging_changes = DB::table('packaging_changes')
            ->where('packaging_id', $id)
            ->get();

        $changes = [];

        foreach ($packaging_changes as $change) {
            if (isset($change->column_name)) {
                // Bandingkan dengan data terbaru di packaging
                $current_value = $packaging->{$change->column_name} ?? null;

                // Memasukkan perubahan termasuk jika old_value null atau berbeda dari current_value
                if ($current_value !== $change->old_value || is_null($change->old_value)) {
                    $changes[$change->column_name] = [
                        'old' => $change->old_value ?? '(kosong)',
                        'new' => $current_value ?? '(kosong)',
                        'changed_at' => $change->created_at,
                        'changed_by' => $change->changer_name,
                    ];
                }
            }
        }

        return view('admin.packaging_detail', compact('packaging', 'packaging_spk', 'changes'));
    }

    public function updatePaymentSubprocess(Request $request)
    {
        // Ambil data lama sebelum perubahan
        $order = Packaging::findOrFail($request->order_id);
        $oldPaymentStatus = $order->payment_status;
        $oldSubprocess = $order->subprocess;

        // Array untuk menyimpan perubahan
        $changes = [];

        // Periksa dan update payment_status jika dikirimkan
        if ($request->has('payment_status') && $request->payment_status != $oldPaymentStatus) {
            $changes[] = [
                'column_name' => 'payment_status',
                'old_value' => $oldPaymentStatus ?? '(kosong)',
                'new_value' => $request->payment_status,
            ];
            $order->payment_status = $request->payment_status;
        }

        // Periksa dan update subprocess jika dikirimkan
        if ($request->has('subprocess') && $request->subprocess != $oldSubprocess) {
            $changes[] = [
                'column_name' => 'subprocess',
                'old_value' => $oldSubprocess ?? '(kosong)',
                'new_value' => $request->subprocess,
            ];
            $order->subprocess = $request->subprocess;
        }

        // Simpan perubahan hanya jika ada perubahan
        if (!empty($changes)) {
            $order->save();

            // Simpan perubahan ke dalam tabel PackagingChange
            foreach ($changes as $change) {
                PackagingChange::create([
                    'packaging_id' => $request->order_id,
                    'column_name' => $change['column_name'],
                    'old_value' => $change['old_value'],
                    'new_value' => $change['new_value'],
                    'created_at' => now(),
                    'updated_at' => now(),
                    'changer_name' => auth()->user()->name,
                ]);
            }
        }

        return $this->index($request);
    }

    public function getDeadlinesPackagings()
    {
        $packagings = Packaging::select('id', 'user_name', 'type', 'deadline_date')
            ->where('progress', '!=', 'Selesai Beneran')
            ->get();

        $events = $packagings->map(function ($order) {
            return [
                'id' => $order->id,
                'title' => $order->user_name.' - '.ucwords(strtolower($order->type)),
                'start' => $order->deadline_date,
            ];
        });

        return response()->json($events);
    }

    public function calendar()
    {
        return view('admin.calendar_packaging');
    }

    public function reminder()
    {
        $reminderDays = 30;
        $today = Carbon::today()->toDateString();

        $packagings = Packaging::where('progress', '!=', 'Selesai Beneran')
            ->whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
            ->get()
            ->map(function ($item) {
                $item->type = 'packaging';

                return $item;
            });

        // Gabungkan semua data
        $orders = $packagings;

        $sortedOrders = $orders->sortBy('deadline_date');

        // Kirim data ke view
        return view('admin.reminder_packaging', ['orders' => $sortedOrders]);
    }

    public function updateDesignStatus(Request $request, $id)
    {
        $request->validate([
            'design_status' => 'required|in:Pending,ACC,DECL',
        ]);

        $order = DB::table('packaging')->where('id', $id)->first();

        if (! $order) {
            return redirect()->back()->with('error', 'Data tidak ditemukan!');
        }

        DB::table('packaging')->where('id', $id)->update([
            'design_status' => $request->design_status,
            'fix_design_date' => now(),
            'updated_at' => now(),
        ]);

        $changes = [];

        foreach ($request->all() as $column => $newValue) {
            if (! Schema::hasColumn('packaging', $column)) {
                continue;
            }

            $oldValue = $order->$column;

            if ($oldValue != $newValue) {
                $changes[] = [
                    'packaging_id' => $id,
                    'column_name' => $column,
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'changer_name' => auth()->user()->name,
                ];
            }
        }

        if (! empty($changes)) {
            DB::table('packaging_changes')->insert($changes);
        }

        return redirect()->back()->with('success', 'Status desain berhasil diperbarui!');
    }

    public function uploadDesign(Request $request, $id)
    {
        $request->validate([
            'desain_path' => 'required|file|mimes:jpg,jpeg,png,pdf', // Hanya format file tertentu yang diperbolehkan
        ]);

        $order = Packaging::find($id);

        if (! $order) {
            return back()->with('error', 'Order tidak ditemukan.');
        }

        if ($request->hasFile('desain_path') && $request->file('desain_path')->isValid()) {
            // Simpan nilai lama sebelum perubahan
            $oldValue = $order->desain_path;

            // Hapus file lama jika ada
            if ($oldValue && Storage::exists($oldValue)) {
                try {
                    Storage::delete($oldValue);
                } catch (\Exception $e) {
                    return back()->with('error', 'Gagal menghapus file lama: '.$e->getMessage());
                }
            }

            // Simpan file baru
            $file = $request->file('desain_path');
            $fileName = $order->user_name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('packaging', $fileName, 'public');

            // Update data di database
            $order->update([
                'desain_path' => $filePath,
                'design_status' => 'Pending',
            ]);

            // Simpan perubahan ke InvitationChange
            PackagingChange::create([
                'packaging_id' => $order->id,
                'column_name' => 'desain_path',
                'old_value' => $oldValue ?? '(kosong)', // Jika null, tampilkan "(kosong)"
                'new_value' => $filePath,
                'created_at' => now(),
                'updated_at' => now(),
                'changer_name' => auth()->user()->name,
            ]);

            return back()->with('success', 'File berhasil diunggah.');
        }

        return back()->with('error', 'Gagal mengunggah file.');
    }
}
