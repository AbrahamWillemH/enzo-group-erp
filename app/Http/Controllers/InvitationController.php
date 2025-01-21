<?php

namespace App\Http\Controllers;

use App\Models\AllOrder;
use DB;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class InvitationController extends Controller
{
    public function index()
    {
        $invitation = Invitation::all()->map(function ($item) {
            $item->type = 'invitation';
            return $item;
        });

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
            'deadline_date' => 'required|date',
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
        $order->user_name = $user->name;
        $order->type = 'Invitation';
        $order->save();

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
        return view('admin.invitation_detail', compact('invitation'));
    }
}
