<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Validator;

class InvitationController extends Controller
{
    public function index()
    {
        $invitation = Invitation::all();
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
        ]);


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
        $order->type = 'Invitation';
        $order->id = Invitation::generateInvitationId();

        $order->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id){
        $invitation = Invitation::findOrFail($id);
        // dd($invitation);
        return view('admin.invitation_edit', compact('invitation'));
    }

    public function update(Request $request, $id)
    {
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
            'price_per_pcs' => 'nullable|int',
            'expedition' => 'nullable|string',
            'dp2_date' => 'nullable|date'
        ]);

        $order = Invitation::findOrFail($id);
        $order->update($validated);

        return redirect()->back()->with('success', 'Data saved successfully');
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
        $invitation = DB::table('invitation')->find($id);
        $purchase = DB::table('purchase_invitation')
        ->where('invitation_id', $id)
        ->get()
        ->map(function ($item) {
            $item->date = Carbon::parse($item->date)->format('d/m/Y');
            return $item;
        });

        return view('admin.invitation_detail', compact('purchase', 'invitation'));
    }
}
