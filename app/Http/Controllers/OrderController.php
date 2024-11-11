<?php

namespace App\Http\Controllers;

use App\Models\OrderConfirmation;
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

        return redirect()->route('user.orders.create')->with('success', 'Pesanan berhasil dibuat!');
    }
}
