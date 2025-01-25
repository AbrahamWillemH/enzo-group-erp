<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Packaging;
use App\Models\SeminarKit;
use App\Models\Souvenir;
use Carbon\Carbon;
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

            $pendingCount = $orders->filter(function ($order) {
                return $order->progress == 'Pending';
            })->count();

            $fixCount = $orders->filter(function ($order) {
                return $order->progress == 'Fix';
            })->count();

            $orderCount = $orders->filter(function ($order) {
                return $order->progress == 'Pemesanan Bahan';
            })->count();

            $productionCount = $orders->filter(function ($order) {
                return $order->progress == 'Proses Produksi';
            })->count();

            $finishingCount = $orders->filter(function ($order) {
                return $order->progress == 'Finishing';
            })->count();

            $readyCount = $orders->filter(function ($order) {
                return $order->progress == 'Ready';
            })->count();

            $today = Carbon::today()->toDateString();
            $orderDeadline = $orders->filter(function ($order) use ($today) {
                // Menggunakan Carbon untuk menghitung selisih tanggal
                if ($order->deadline_date) {
                    $deadline = Carbon::parse($order->deadline_date);
                    return $deadline->diffInDays($today) <= 21;
                }
            });

        return view('admin.dashboard', compact('orderDeadline', 'pendingCount', 'fixCount', 'orderCount', 'productionCount', 'finishingCount', 'readyCount'));
    }
}
