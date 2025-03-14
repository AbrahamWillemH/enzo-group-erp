<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {

        Auth::logout();

        if ($request) {
            $credentials = $request->validate([
                'name' => ['required', 'string'],
                'password' => ['required'],
                'email' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
            }

            if (auth()->user() != null) {
                // Redirect based on role
                if (auth()->user()->isAdmin()) {
                    return redirect()->route('admin.dashboard.invitation');
                } else {
                    return redirect()->route('user.dashboard');
                }
            }
        }

        return back()->withErrors([
            'name' => 'Data tidak sesuai.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
