<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil semua data pesanan dari orders_confirmation
        $orders = Order::all();
        return view('admin.dashboard', compact('orders'));
    }

    public function approveOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Dikonfirmasi';
        $order->save();

        return redirect()->back()->with('success', 'Pesanan telah dikonfirmasi');
    }

    public function declineOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Ditolak';
        $order->save();

        return redirect()->back()->with('error', 'Pesanan telah ditolak');
    }


}
