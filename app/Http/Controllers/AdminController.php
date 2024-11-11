<?php

namespace App\Http\Controllers;

use App\Models\OrderConfirmation;
use App\Models\OrderFinal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil semua data pesanan dari orders_confirmation
        $orders = OrderConfirmation::all();
        return view('admin.dashboard', compact('orders'));
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

        // Kembali ke dashboard admin dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Order has been approved and moved to final orders.');
    }
}
