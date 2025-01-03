<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Order;
use App\Models\Packaging;
use App\Models\SeminarKit;
use App\Models\Souvenir;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function register (Request $request) {
        $validated=  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
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
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function index()
    {
        // Mengambil semua pesanan yang terkait dengan user yang sedang login
        $invitations = Invitation::where('user_id', auth()->user()->id)->get();
        $souvenirs = Souvenir::where('user_id', auth()->user()->id)->get();
        $seminarkits = SeminarKit::where('user_id', auth()->user()->id)->get();
        $packagings = Packaging::where('user_id', auth()->user()->id)->get();

        return view('user.dashboard', compact('invitations', 'souvenirs', 'seminarkits', 'packagings'));
    }
}
