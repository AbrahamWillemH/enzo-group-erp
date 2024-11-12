<?php

namespace App\Http\Controllers;

use App\Models\AllOrder;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function create()
    {
        return view('user.orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'deadline_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
        ]);

        $orders = new Invitation();
        $orders->user_id = Auth::id();
        $orders->user_name = Auth::user()->name;
        $orders->product_name = $request->input('product_name');
        $orders->quantity = $request->input('quantity');
        $orders->deadline_date = $request->input('deadline_date');
        $orders->status = AllOrder::STATUS_WAITING;
        $orders->save();

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
