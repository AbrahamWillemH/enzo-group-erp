<?php

namespace App\Http\Controllers;

use App\Models\InvitationChange;
use Schema;
use Storage;
use Validator;
use Carbon\Carbon;
use App\Models\Souvenir;
use App\Models\Invitation;
use Illuminate\Http\Request;
use App\Models\InvitationSPK;
use App\Models\PurchaseInvitation;
use Illuminate\Support\Facades\DB;

class InvitationController extends Controller
{
    public function index(Request $request)
    {
        $invitation = Invitation::query();
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'alphabetical':
                    $invitation->orderBy('user_name', 'asc');
                    break;
                case 'order':
                    $invitation->orderBy('created_at', 'asc');
                    break;
                case 'deadline':
                    $invitation->orderBy('deadline_date', 'asc');
                    break;
                default:
                    $invitation->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            $invitation->orderBy('created_at', 'desc');
        }

        $invitation = $invitation->get();

        return view('admin.invitation', compact('invitation'));
    }

    public function create()
    {
        return view('user.orders.invitation_create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'instagram' => 'nullable|string|max:255',
            'quantity' => 'required|integer',
            'product_name' => 'required|string|max:255',
            'deadline_date' => 'nullable|date',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|string|max:255',
            'groom_name' => 'required|string|max:255',
            'groom_nickname' => 'required|string|max:255',
            'groom_father' => 'required|string|max:255',
            'groom_mother' => 'required|string|max:255',
            'groom_parents_address' => 'required|string|max:255',
            'bride_name' => 'required|string|max:255',
            'bride_nickname' => 'required|string|max:255',
            'bride_father' => 'required|string|max:255',
            'bride_mother' => 'required|string|max:255',
            'bride_parents_address' => 'required|string|max:255',
            'akad_pemberkatan_date' => 'required|date',
            'akad_pemberkatan_time' => 'required',
            'akad_pemberkatan_location' => 'required|string',
            'reception_date' => 'required|date',
            'reception_time' => 'required',
            'reception_location' => 'required|string',
            'note_design' => 'nullable|string'
        ]);

        $a = $request->reception_date;
        $souvenirCount = Souvenir::where('event_date', $a)->count();
        $invitationCount = Invitation::where('reception_date', $a)->count();
        $eventCount = $souvenirCount + $invitationCount;

        if ($eventCount >= 5){
            return redirect()->back()->with('error', 'Terlalu banyak deadline pada ' . Carbon::parse($request->reception_date)->format('d/m/Y'));
        }

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Proses simpan data jika validasi berhasil
        $validated = $validator->validated();
        $user = auth()->user();
        $order = new Invitation($validated);
        $order->user_id = $user->id;
        $order->type = 'invitation';
        $order->id = Invitation::generateInvitationId();
        $spk = new InvitationSPK();
        $spk->invitation_id = $order->id;

        $order->save();
        $spk->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id){
        $invitation = Invitation::findOrFail($id);
        // dd($invitation);
        return view('admin.invitation_edit', compact('invitation'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'instagram' => 'nullable|string|max:255',
            'quantity' => 'required|integer',
            'product_name' => 'required|string|max:255',
            'deadline_date' => 'nullable|date',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|string|max:255',
            'groom_name' => 'required|string|max:255',
            'groom_nickname' => 'required|string|max:255',
            'groom_father' => 'required|string|max:255',
            'groom_mother' => 'required|string|max:255',
            'groom_parents_address' => 'required|string|max:255',
            'bride_name' => 'required|string|max:255',
            'bride_nickname' => 'required|string|max:255',
            'bride_father' => 'required|string|max:255',
            'bride_mother' => 'required|string|max:255',
            'bride_parents_address' => 'required|string|max:255',
            'akad_pemberkatan_date' => 'required|date',
            'akad_pemberkatan_time' => 'required',
            'akad_pemberkatan_location' => 'required|string',
            'reception_date' => 'required|date',
            'reception_time' => 'required',
            'reception_location' => 'required|string',
            'payment_status' => 'required|string',
            'progress' => 'required|string',
            'design_status' => 'required|string',
            'printout' => 'nullable|string',
            'price_per_pcs' => 'nullable|integer',
            'expedition' => 'nullable|string',
            'dp1_date' => 'nullable|date',
            'dp2_date' => 'nullable|date',
            'paid_off_date' => 'nullable|date',
            'fix_design_date' => 'nullable|date',
            'desain_path' => 'nullable|mimes:jpg,jpeg,png,pdf',
            'subprocess' => 'nullable',
            'note_design' => 'nullable|string',
            'note_cs' => 'nullable|string',
            'size_fix' => 'nullable|string'
        ]);

        $order = Invitation::findOrFail($id);
        $changes = [];

        foreach ($validated as $column => $newValue) {
            $oldValue = $order->$column;

            if ($oldValue != $newValue) {
                $changes[] = [
                    'invitation_id' => $order->id,
                    'column_name' => $column,
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'changer_name' => auth()->user()->name
                ];
            }
        }

        if (!empty($changes)) {
            InvitationChange::insert($changes);
        }

        if ($request->hasFile('desain_path') && $request->file('desain_path')->isValid()) {
            if ($order->desain_path && Storage::exists($order->desain_path)) {
                try {
                    Storage::delete($order->desain_path);
                } catch (\Exception $e) {
                    dd($e->getMessage());
                }
            }

            $file = $request->file('desain_path');
            $fileName = $order->user_name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('invitations', $fileName, 'public');

            $validated['desain_path'] = $filePath;
            if(@isset($validated['desain_path'])){
                $validated['design_status'] = 'Pending';
            }
        }

        $order->update($validated);

        return redirect()->back()->with('success', 'Data updated successfully');
    }


    public function approveOrder($id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->status = 'Dikonfirmasi';
        $invitation->save();

        return redirect()->back()->with('success', 'Pesanan telah dikonfirmasi');
    }

    public function declineOrder($id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->status = 'Ditolak';
        $invitation->save();

        return redirect()->back()->with('error', 'Pesanan telah ditolak');
    }

    public function invitationDetails($id){
        // Ambil data dari spk_invitation
        $invitation_spk = DB::table('spk_invitation')
            ->where('invitation_id', $id)
            ->first();

        // Decode JSON ke array jika data ditemukan
        if ($invitation_spk) {
            $invitation_spk->peruntukan = json_decode($invitation_spk->peruntukan, true);
            $invitation_spk->nama_ukuran = json_decode($invitation_spk->nama_ukuran, true);
            $invitation_spk->kebutuhan = json_decode($invitation_spk->kebutuhan, true);
            $invitation_spk->stok = json_decode($invitation_spk->stok, true);
            $invitation_spk->jumlah_beli = json_decode($invitation_spk->jumlah_beli, true);
            $invitation_spk->supplier = json_decode($invitation_spk->supplier, true);
        }

        // Ambil data dari invitation
        $invitation = DB::table('invitation')->find($id);

        // Ambil semua perubahan dari invitation_changes
        $invitation_changes = DB::table('invitation_changes')
            ->where('invitation_id', $id)
            ->get();

        $changes = [];

        foreach ($invitation_changes as $change) {
            if (isset($change->column_name)) {
                // Bandingkan dengan data terbaru di invitation
                $current_value = $invitation->{$change->column_name} ?? null;

                // Memasukkan perubahan termasuk jika old_value null atau berbeda dari current_value
                if ($current_value !== $change->old_value || is_null($change->old_value)) {
                    $changes[$change->column_name] = [
                        'old' => $change->old_value ?? '(kosong)',
                        'new' => $current_value ?? '(kosong)',
                        'changed_at' => $change->created_at,
                        'changed_by' => $change->changer_name
                    ];
                }
            }
        }

        return view('admin.invitation_detail', compact('invitation', 'invitation_spk', 'changes'));
    }




    public function updatePaymentSubprocess(Request $request)
    {
        // Perbarui status pembayaran di database
        $order = Invitation::findOrFail($request->order_id);

        if ($request->has('payment_status')) {
            $order->payment_status = $request->payment_status;
        }

        if ($request->has('subprocess')) {
            $order->subprocess = $request->subprocess;
        }

        $order->save();

        return $this->index($request);
    }

    public function purchaseInvitationStore(Request $request, $id) {
        // dd($request);
        $validated = $request->validate([
            'order_code' => 'required|string|max:255|unique:purchase_invitation',
            'invoice' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'supplier' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'product' => 'nullable|string|max:255',
            'size_type' => 'nullable|string|max:255',
            'quantity_per_type' => 'nullable|integer',
            'termin' => 'nullable|date',
            'total' => 'nullable|integer',
            'unit' => 'nullable|string|max:255',
            'pic' => 'nullable|string|max:255',
            'note' => 'nullable|string|max:1000',
            'status' => 'required|in:High Priority,Medium Priority,Low Priority',
            'send' => 'nullable|string|max:255',
            'bought' => 'nullable|boolean',
            'paid' => 'nullable|boolean',
        ]);

        $validated['invitation_id'] = $id;

        $order = new PurchaseInvitation($validated);
        $order->save();


        return redirect()->back()->with('success', 'Purchase invitation created successfully.');
    }

    public function getDeadlinesInvitations()
    {
        $invitations = Invitation::select('id', 'user_name', 'type', 'deadline_date')->get();

        $events = $invitations->map(function ($order) {
            return [
                'id' => $order->id,
                'title' => $order->user_name. ' - ' . ucwords(strtolower($order->type)),
                'start' => $order->deadline_date,
            ];
        });

        return response()->json($events);
    }

    public function calendar(){
        return view('admin.calendar_invitation');
    }

    public function reminder()
    {
        $reminderDays = 30;
        $today = Carbon::today()->toDateString();

        // Ambil data dari masing-masing tabel dengan filter berdasarkan deadline
        $invitations = Invitation::where('progress', '!=', 'Selesai Beneran')
        ->whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
        ->get()
        ->map(function ($item) {
            $item->type = 'invitation';
            return $item;
        });

        $sortedOrders = $invitations->sortBy('deadline_date');

        // Kirim data ke view
        return view('admin.reminder_invitation', ['orders' => $sortedOrders]);
    }

    public function updateDesignStatus(Request $request, $id)
    {
        $request->validate([
            'design_status' => 'required|in:Pending,ACC,DECL',
        ]);

        $order = DB::table('invitation')->where('id', $id)->first();

        if (!$order) {
            return redirect()->back()->with('error', 'Data tidak ditemukan!');
        }

        DB::table('invitation')->where('id', $id)->update([
            'design_status' => $request->design_status,
            'updated_at' => now(),
        ]);

        $changes = [];

        foreach ($request->all() as $column => $newValue) {
            if (!Schema::hasColumn('invitation', $column)) {
                continue;
            }

            $oldValue = $order->$column;

            if ($oldValue != $newValue) {
                $changes[] = [
                    'invitation_id' => $id,
                    'column_name' => $column,
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'changer_name' => auth()->user()->name
                ];
            }
        }

        if (!empty($changes)) {
            DB::table('invitation_changes')->insert($changes);
        }

        return redirect()->back()->with('success', 'Status desain berhasil diperbarui!');
    }

    public function uploadDesign(Request $request, $id)
    {
        $request->validate([
            'desain_path' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Sesuaikan dengan format dan ukuran file
        ]);

        $order = Invitation::find($id); // Gantilah dengan ID order yang sesuai (bisa dari request)

        if (!$order) {
            return back()->with('error', 'Order tidak ditemukan.');
        }

        if ($request->hasFile('desain_path') && $request->file('desain_path')->isValid()) {
            // Hapus file lama jika ada
            if ($order->desain_path && Storage::exists($order->desain_path)) {
                try {
                    Storage::delete($order->desain_path);
                } catch (\Exception $e) {
                    return back()->with('error', 'Gagal menghapus file lama: ' . $e->getMessage());
                }
            }

            // Simpan file baru
            $file = $request->file('desain_path');
            $fileName = $order->user_name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('invitations', $fileName, 'public');

            // Simpan path ke database
            $order->update([
                'desain_path' => $filePath,
                'design_status' => 'Pending'
            ]);

            return back()->with('success', 'File berhasil diunggah.');
        }

        return back()->with('error', 'Gagal mengunggah file.');
    }
}
