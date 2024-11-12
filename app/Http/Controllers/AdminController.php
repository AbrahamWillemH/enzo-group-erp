<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Packaging;
use App\Models\SeminarKit;
use App\Models\Souvenir;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil semua pesanan yang terkait dengan user yang sedang login
        $invitations = Invitation::all();
        $souvenirs = Souvenir::all();
        $seminarkits = SeminarKit::all();
        $packagings = Packaging::all();

        return view('user.dashboard', compact('orders', 'souvenirs', 'seminarkits', 'packagings'));
    }
}
