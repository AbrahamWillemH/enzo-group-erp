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
        // Menambahkan properti type untuk membedakan jenis data
        $invitations = Invitation::all()->map(function ($item) {
            $item->type = 'invitation';
            return $item;
        });

        $souvenirs = Souvenir::all()->map(function ($item) {
            $item->type = 'souvenir';
            return $item;
        });

        $seminarkits = SeminarKit::all()->map(function ($item) {
            $item->type = 'seminar_kit';
            return $item;
        });

        $packagings = Packaging::all()->map(function ($item) {
            $item->type = 'packaging';
            return $item;
        });

        // Menggabungkan semua koleksi menjadi satu
        $orders = $invitations
            ->concat($souvenirs)
            ->concat($seminarkits)
            ->concat($packagings);

        return view('admin.dashboard', compact('orders', 'invitations', 'souvenirs', 'seminarkits', 'packagings'));
    }
        public function orderIndex()
    {
        // Menambahkan properti type untuk membedakan jenis data
        $invitations = Invitation::all()->map(function ($item) {
            $item->type = 'invitation';
            return $item;
        });

        $souvenirs = Souvenir::all()->map(function ($item) {
            $item->type = 'souvenir';
            return $item;
        });

        $seminarkits = SeminarKit::all()->map(function ($item) {
            $item->type = 'seminar_kit';
            return $item;
        });

        $packagings = Packaging::all()->map(function ($item) {
            $item->type = 'packaging';
            return $item;
        });

        // Menggabungkan semua koleksi menjadi satu
        $orders = $invitations
            ->concat($souvenirs)
            ->concat($seminarkits)
            ->concat($packagings);

        return view('admin.orders', compact('orders'));
    }
}
