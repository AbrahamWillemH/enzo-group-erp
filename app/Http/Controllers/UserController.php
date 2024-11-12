<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function register (Request $request) {
        $validated=  $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = $this->create($validated);

        Auth::login($user);
        return redirect()->route('user.dashboard');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function index()
    {
        // Mengambil semua pesanan yang terkait dengan user yang sedang login
        $orders = Order::where('user_id', auth()->user()->id)->get();

        return view('user.dashboard', compact('orders'));
    }
}
