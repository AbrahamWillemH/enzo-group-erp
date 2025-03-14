<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Souvenir;
use App\Models\SouvenirChange;
use App\Models\SouvenirSPK;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Schema;
use Storage;
use Validator;

class SouvenirController extends Controller
{
    public function index(Request $request)
    {
        $souvenir = Souvenir::query();
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'alphabetical':
                    $souvenir->orderBy('user_name', 'asc');
                    break;
                case 'order':
                    $souvenir->orderBy('created_at', 'asc');
                    break;
                case 'deadline':
                    $souvenir->orderBy('deadline_date', 'asc');
                    break;
                default:
                    $souvenir->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            $souvenir->orderBy('created_at', 'desc');
        }

        $souvenir = $souvenir->get();

        return view('admin.souvenir', compact('souvenir'));
    }

    public function create()
    {
        return view('user.orders.souvenir_create');
    }

    public function store(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'address' => 'required|string|max:1000',
            'event_date' => 'required|date',
            'bridegroom_name' => 'required|string|max:255',
            'pack' => 'required|string|max:255',
            'design' => 'required|string|max:255',
            'thankscard' => 'required|string|max:255',
            'color_motif' => 'required|string|max:255',
            'motif_backup' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'note_design' => 'nullable|string',
            'design_from_cust' => 'nullable|mimes:jpg,jpeg,png,pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Check if file exists and is valid
        $validated = $validator->validated();
        if ($request->hasFile('design_from_cust') && $request->file('design_from_cust')->isValid()) {
            $file = $request->file('design_from_cust');
            $fileName = auth()->user()->name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('souvenir/cust', $fileName, 'public');

            // Assign file path to validated data
            $validated['design_from_cust'] = $filePath;
        }

        // Check for event deadline conflicts
        $eventDate = $request->event_date;
        $souvenirCount = Souvenir::where('event_date', $eventDate)->count();
        $invitationCount = Invitation::where('reception_date', $eventDate)->count();
        $eventCount = $souvenirCount + $invitationCount;

        if ($eventCount >= 5) {
            return redirect()->back()->with('error', 'Terlalu banyak deadline pada '.Carbon::parse($eventDate)->format('d/m/Y'));
        }

        // Create and save the Souvenir
        $user = auth()->user();
        $order = new Souvenir($validated);
        $order->user_id = $user->id;
        $order->type = 'souvenir';
        $order->id = Souvenir::generateSouvenirId();

        $spk = new SouvenirSPK();
        $spk->souvenir_id = $order->id;

        $order->save();
        $spk->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $souvenir = Souvenir::findOrFail($id);

        // dd($Souvenir);
        return view('admin.souvenir_edit', compact('souvenir'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'bridegroom_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'product_name' => 'required|string|max:255',
            'pack' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'design' => 'required|string|max:255',
            'thankscard' => 'required|string|max:255',
            'color_motif' => 'required|string|max:255',
            'motif_backup' => 'nullable|string|max:255',
            'quantity' => 'required|integer',
            'deadline_date' => 'nullable|date',
            'progress' => 'required|string|max:255',
            'payment_status' => 'required|string|max:255',
            'dp1_date' => 'nullable|date',
            'dp2_date' => 'nullable|date',
            'paid_off_date' => 'nullable|date',
            'fix_design_date' => 'nullable|date',
            'price_per_pcs' => 'nullable|integer',
            'expedition' => 'nullable|string|max:255',
            'printout' => 'nullable|string|max:255',
            'design_status' => 'nullable|string|max:255',
            'desain_thankscard_path' => 'nullable|mimes:jpg,jpeg,png,pdf',
            'desain_emboss_path' => 'nullable|mimes:jpg,jpeg,png,pdf',
            'subprocess' => 'nullable|enum',
            'size' => 'nullable|string|max:255',
            'note_design' => 'nullable|string',
            'note_cs' => 'nullable|string',
            'source' => 'required|string|max:255',
            'size_fix' => 'nullable|string',
            'design_from_cust' => 'nullable|mimes:jpg,jpeg,png,pdf',
        ]);

        $order = Souvenir::findOrFail($id);

        // Simpan perubahan ke dalam SouvenirChange
        foreach ($validated as $column => $newValue) {
            $oldValue = $order->$column;

            if ($oldValue != $newValue) {
                SouvenirChange::create([
                    'souvenir_id' => $order->id,
                    'column_name' => $column,
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'changer_name' => auth()->user()->name,
                ]);
            }
        }

        // Handle file desain_emboss_path
        if ($request->hasFile('desain_emboss_path') && $request->file('desain_emboss_path')->isValid()) {
            if ($order->desain_emboss_path && Storage::exists($order->desain_emboss_path)) {
                Storage::delete($order->desain_emboss_path);
            }
            $file = $request->file('desain_emboss_path');
            $fileName = $order->user_name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('souvenir/emboss', $fileName, 'public');

            // Simpan perubahan path desain
            SouvenirChange::create([
                'souvenir_id' => $order->id,
                'column_name' => 'desain_emboss_path',
                'old_value' => $order->desain_emboss_path,
                'new_value' => $filePath,
            ]);

            $validated['desain_emboss_path'] = $filePath;
            $validated['design_status'] = 'Pending';
        }

        // Handle file desain_thankscard_path
        if ($request->hasFile('desain_thankscard_path') && $request->file('desain_thankscard_path')->isValid()) {
            if ($order->desain_thankscard_path && Storage::exists($order->desain_thankscard_path)) {
                Storage::delete($order->desain_thankscard_path);
            }
            $file = $request->file('desain_thankscard_path');
            $fileName = $order->user_name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('souvenir/thankscard', $fileName, 'public');

            // Simpan perubahan path desain
            SouvenirChange::create([
                'souvenir_id' => $order->id,
                'column_name' => 'desain_thankscard_path',
                'old_value' => $order->desain_thankscard_path,
                'new_value' => $filePath,
            ]);

            $validated['desain_thankscard_path'] = $filePath;
            $validated['design_status'] = 'Pending';
        }

        if ($request->hasFile('design_from_cust') && $request->file('design_from_cust')->isValid()) {
            if ($order->design_from_cust && Storage::exists($order->design_from_cust)) {
                Storage::delete($order->design_from_cust);
            }
            $file = $request->file('design_from_cust');
            $fileName = $order->user_name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('souvenir/cust', $fileName, 'public');

            // Simpan perubahan path desain
            SouvenirChange::create([
                'souvenir_id' => $order->id,
                'column_name' => 'desain_thankscard_path',
                'old_value' => $order->desain_thankscard_path,
                'new_value' => $filePath,
            ]);

            $validated['design_from_cust'] = $filePath;
            $validated['design_status'] = 'Pending';
        }

        // Update data
        $order->update($validated);

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function souvenirDetails($id)
    {
        $souvenir_spk = DB::table('spk_souvenir')
            ->where('souvenir_id', $id)
            ->first();

        // DECODE FROM JSON TO ARRAY
        if ($souvenir_spk) {
            $souvenir_spk->nama_bahan = json_decode($souvenir_spk->nama_bahan, true);
            $souvenir_spk->kebutuhan = json_decode($souvenir_spk->kebutuhan, true);
            $souvenir_spk->stok = json_decode($souvenir_spk->stok, true);
            $souvenir_spk->jumlah_beli = json_decode($souvenir_spk->jumlah_beli, true);
            $souvenir_spk->supplier = json_decode($souvenir_spk->supplier, true);
        }

        $souvenir = DB::table('souvenir')->find($id);

        $souvenir_changes = DB::table('souvenir_changes')
            ->where('souvenir_id', $id)
            ->get();

        $changes = [];

        foreach ($souvenir_changes as $change) {
            if (isset($change->column_name)) {
                // Bandingkan dengan data terbaru di souvenir
                $current_value = $souvenir->{$change->column_name} ?? null;

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

        return view('admin.souvenir_detail', compact('souvenir', 'souvenir_spk', 'changes'));
    }

    public function updatePaymentSubprocess(Request $request)
    {
        // Ambil data lama sebelum perubahan
        $order = Souvenir::findOrFail($request->order_id);
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

            // Simpan perubahan ke dalam tabel SouvenirChange
            foreach ($changes as $change) {
                SouvenirChange::create([
                    'souvenir_id' => $request->order_id,
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

    public function getDeadlinesSouvenirs()
    {
        $souvenirs = Souvenir::select('id', 'user_name', 'type', 'deadline_date')
            ->where('progress', '!=', 'Selesai Beneran')
            ->get();

        $events = $souvenirs->map(function ($order) {
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
        return view('admin.calendar_souvenir');
    }

    public function reminder()
    {
        $reminderDays = 30;
        $today = Carbon::today()->toDateString();

        $souvenirs = Souvenir::where('progress', '!=', 'Selesai Beneran')
            ->whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
            ->get()
            ->map(function ($item) {
                $item->type = 'souvenir';

                return $item;
            });

        // Gabungkan semua data
        $orders = $souvenirs;

        $sortedOrders = $orders->sortBy('deadline_date');

        // Kirim data ke view
        return view('admin.reminder_souvenir', ['orders' => $sortedOrders]);
    }

    public function updateDesignStatus(Request $request, $id)
    {
        $request->validate([
            'design_status' => 'required|in:Pending,ACC,DECL',
        ]);

        $order = DB::table('souvenir')->where('id', $id)->first();

        if (! $order) {
            return redirect()->back()->with('error', 'Data tidak ditemukan!');
        }

        DB::table('souvenir')->where('id', $id)->update([
            'design_status' => $request->design_status,
            'fix_design_date' => now(),
            'updated_at' => now(),
        ]);

        $changes = [];

        foreach ($request->all() as $column => $newValue) {
            if (! Schema::hasColumn('souvenir', $column)) {
                continue;
            }

            $oldValue = $order->$column;

            if ($oldValue != $newValue) {
                $changes[] = [
                    'souvenir_id' => $id,
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
            DB::table('souvenir_changes')->insert($changes);
        }

        return redirect()->back()->with('success', 'Status desain berhasil diperbarui!');
    }

    public function uploadDesign(Request $request, $type, $id)
    {
        if ($type == 'thankscard') {
            $request->validate([
                'desain_thankscard_path' => 'required|file|mimes:jpg,jpeg,png,pdf',
            ]);
        } else {
            $request->validate([
                'desain_emboss_path' => 'required|file|mimes:jpg,jpeg,png,pdf',
            ]);
        }

        $order = Souvenir::find($id);

        if (! $order) {
            return back()->with('error', 'Order tidak ditemukan.');
        }

        if ($request->hasFile('desain_emboss_path') && $request->file('desain_emboss_path')->isValid()) {
            $oldValue = $order->desain_emboss_path;
            // Hapus file lama jika ada
            if ($order->desain_emboss_path && Storage::exists($order->desain_emboss_path)) {
                try {
                    Storage::delete($order->desain_emboss_path);
                } catch (\Exception $e) {
                    return back()->with('error', 'Gagal menghapus file lama: '.$e->getMessage());
                }
            }

            // Simpan file baru
            $file = $request->file('desain_emboss_path');
            $fileName = $order->user_name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('souvenir', $fileName, 'public');

            // Simpan path ke database
            $order->update([
                'desain_emboss_path' => $filePath,
                'design_status' => 'Pending',
            ]);

            SouvenirChange::create([
                'souvenir_id' => $order->id,
                'column_name' => 'desain_path',
                'old_value' => $oldValue ?? '(kosong)', // Jika null, tampilkan "(kosong)"
                'new_value' => $filePath,
                'created_at' => now(),
                'updated_at' => now(),
                'changer_name' => auth()->user()->name,
            ]);

            return back()->with('success', 'File berhasil diunggah.');
        }

        if ($request->hasFile('desain_thankscard_path') && $request->file('desain_thankscard_path')->isValid()) {
            $oldValue = $order->desain_thankscard_path;
            // Hapus file lama jika ada
            if ($order->desain_thankscard_path && Storage::exists($order->desain_thankscard_path)) {
                try {
                    Storage::delete($order->desain_thankscard_path);
                } catch (\Exception $e) {
                    return back()->with('error', 'Gagal menghapus file lama: '.$e->getMessage());
                }
            }

            // Simpan file baru
            $file = $request->file('desain_thankscard_path');
            $fileName = $order->user_name.'-'.time().'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('souvenir', $fileName, 'public');

            // Simpan path ke database
            $order->update([
                'desain_thankscard_path' => $filePath,
                'design_status' => 'Pending',
            ]);

            SouvenirChange::create([
                'souvenir_id' => $order->id,
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
