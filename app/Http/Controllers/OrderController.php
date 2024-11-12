<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderConfirmation;
use App\Models\OrderFinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        return view('user.orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'deadline_date' => 'required|date',
        ]);

        $orders = new Order();
        $orders->user_id = Auth::id();
        $orders->user_name = Auth::user()->name;
        $orders->product_name = $request->input('product_name');
        $orders->quantity = $request->input('quantity');
        $orders->deadline_date = $request->input('deadline_date');
        $orders->status = Order::STATUS_WAITING;
        $orders->save();

        return redirect()->route('user.dashboard')->with('success', 'Pesanan berhasil dibuat!');
    }

    public function updateProgress($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $order = Order::find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
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

        return redirect()->back()->with('success', 'Order progress updated to ' . $order->progress);
    }
}
