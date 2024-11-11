<?php

namespace App\Http\Controllers;

use App\Models\OrderConfirmation;
use App\Models\OrderDeclined;
use App\Models\OrderFinal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil semua data pesanan dari orders_confirmation
        $orders_confirmation = OrderConfirmation::all();
        $orders_final = OrderFinal::all();
        $orders_declined = OrderDeclined::all();
        return view('admin.dashboard', compact('orders_confirmation', 'orders_declined', 'orders_final'));
    }

    public function approveOrder($id)
    {
        // Ambil pesanan yang ingin disetujui dari orders_confirmation
        $order_confirmation = OrderConfirmation::findOrFail($id);

        // Pindahkan data pesanan ke orders_final
        $order_final = new OrderFinal();
        $order_final->user_id = $order_confirmation->user_id;
        $order_final->user_name = $order_confirmation->user_name;
        $order_final->product_name = $order_confirmation->product_name;
        $order_final->quantity = $order_confirmation->quantity;
        $order_final->deadline_date = $order_confirmation->deadline_date;
        $order_final->save();

        // Hapus pesanan yang telah disetujui dari orders_confirmation
        $order_confirmation->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Order has been approved and moved to final orders.');
    }

    public function declineOrder($id)
    {
        // Ambil pesanan yang ingin ditolak dari orders_confirmation
        $order_confirmation = OrderConfirmation::findOrFail($id);

        // Pindahkan pesanan dari orders_confirmation ke orders_declined
        $order_declined = new OrderDeclined();
        $order_declined->user_id = $order_confirmation->user_id;
        $order_declined->user_name = $order_confirmation->user_name;
        $order_declined->product_name = $order_confirmation->product_name;
        $order_declined->quantity = $order_confirmation->quantity;
        $order_declined->deadline_date = $order_confirmation->deadline_date;
        $order_declined->save();

        // Hapus pesanan yang ditolak dari orders_confirmation
        $order_confirmation->delete();

        return redirect()->route('admin.dashboard');
    }

}
