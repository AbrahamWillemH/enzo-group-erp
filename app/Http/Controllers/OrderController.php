<?php

namespace App\Http\Controllers;

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

        $orders_confirmation = new OrderConfirmation();
        $orders_confirmation->user_id = Auth::id();
        $orders_confirmation->user_name = Auth::user()->name;
        $orders_confirmation->product_name = $request->input('product_name');
        $orders_confirmation->quantity = $request->input('quantity');
        $orders_confirmation->deadline_date = $request->input('deadline_date');
        $orders_confirmation->save();

        return redirect()->route('user.dashboard')->with('success', 'Pesanan berhasil dibuat!');
    }

    public function updateProgress($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $order = OrderFinal::find($id);

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
