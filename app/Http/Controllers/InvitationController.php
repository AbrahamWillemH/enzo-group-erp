<?php

namespace App\Http\Controllers;

use App\Models\AllOrder;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index()
    {
        return view('admin.orders');
    }

    public function create()
    {
        return view('user.orders.invitation_create');
    }
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'product_name' => 'required|string|max:255',
            'deadline_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
            'type' => 'required|string|max:255',
            'finishing' => 'required|string|max:255',
            'bride_name' => 'required|string|max:255',
            'bride_nickname' => 'required|string|max:255',
            'bride_father' => 'required|string|max:255',
            'bride_mother' => 'required|string|max:255',
            'groom_name' => 'required|string|max:255',
            'groom_nickname' => 'required|string|max:255',
            'groom_father' => 'required|string|max:255',
            'groom_mother' => 'required|string|max:255',
            'akad_pemberkatan_date' => 'required|date',
            'akad_pemberkatan_time' => 'required|date_format:H:i',
            'akad_pemberkatan_location' => 'required|string|max:255',
            'reception_date' => 'required|date',
            'reception_time' => 'required|date_format:H:i',
            'reception_location' => 'required|string|max:255',
        ]);

        // Membuat instance baru dari model Invitation dan mengisi datanya
        $order = new Invitation();
        $order->user_id = Auth::id();
        $order->user_name = Auth::user()->name;
        $order->address = $request->input('address');
        $order->phone_number = $request->input('phone_number');
        $order->instagram = $request->input('instagram');
        $order->product_name = $request->input('product_name');
        $order->quantity = $request->input('quantity');
        $order->type = $request->input('type');
        $order->deadline_date = $request->input('deadline_date');
        $order->finishing = $request->input('finishing');
        $order->status = AllOrder::STATUS_WAITING;
        $order->progress = AllOrder::PROGRESS_1;
        $order->bride_name = $request->input('bride_name');
        $order->bride_nickname = $request->input('bride_nickname');
        $order->bride_father = $request->input('bride_father');
        $order->bride_mother = $request->input('bride_mother');
        $order->bride_parents_address = $request->input('bride_parents_address');
        $order->groom_name = $request->input('groom_name');
        $order->groom_nickname = $request->input('groom_nickname');
        $order->groom_father = $request->input('groom_father');
        $order->groom_mother = $request->input('groom_mother');
        $order->groom_parents_address = $request->input('groom_parents_address');
        $order->akad_pemberkatan_date = $request->input('akad_pemberkatan_date');
        $order->akad_pemberkatan_time = $request->input('akad_pemberkatan_time');
        $order->akad_pemberkatan_location = $request->input('akad_pemberkatan_location');
        $order->reception_date = $request->input('reception_date');
        $order->reception_time = $request->input('reception_time');
        $order->reception_location = $request->input('reception_location');

        // Menyimpan data
        $order->save();

        // Redirect dengan pesan sukses
        return redirect()->route('user.dashboard')->with('success', 'Pesanan berhasil dibuat!');
    }

    public function updateProgress($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $order = Invitation::find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Invitation not found.');
        }

        // Enum status progress
        $progressStages = [
            'Pemesanan Bahan',
            'Proses Produksi',
            'Finishing',
            'Selesai'
        ];

        // Dapatkan index progress saat ini
        $currentProgressIndex = array_search($order->progress, $progressStages);

        if ($currentProgressIndex === false || $currentProgressIndex == count($progressStages) - 1) {
            return redirect()->back()->with('info', 'This order is already completed.');
        }

        $order->progress = $progressStages[$currentProgressIndex + 1];
        $order->save();

        return redirect()->back()->with('success', 'Invitation progress updated to ' . $order->progress);
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
}
