<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Packaging;
use App\Models\Souvenir;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexInvitation()
    {
        // Menambahkan properti type untuk membedakan jenis data
        $invitations = Invitation::all()->map(function ($item) {
            $item->type = 'invitation';
            return $item;
        });

        // Menggabungkan semua koleksi menjadi satu
        $orders = $invitations;

            $pendingNames = $orders->filter(function ($order) {
                return $order->progress == 'Pending';
            })->pluck('user_name')->toArray();

            $pendingCount = $orders->filter(function ($order) {
                return $order->progress == 'Pending';
            })->count();

            $fixNames = $orders->filter(function ($order) {
                return $order->progress == 'Fix';
            })->pluck('user_name')->toArray();

            $fixCount = $orders->filter(function ($order) {
                return $order->progress == 'Fix';
            })->count();

            $orderNames = $orders->filter(function ($order) {
                return $order->progress == 'Pemesanan Bahan';
            })->pluck('user_name')->toArray();

            $orderCount = $orders->filter(function ($order) {
                return $order->progress == 'Pemesanan Bahan';
            })->count();

            $prodNames = $orders->filter(function ($order) {
                return $order->progress == 'Proses Produksi';
            })->pluck('user_name')->toArray();

            $productionCount = $orders->filter(function ($order) {
                return $order->progress == 'Proses Produksi';
            })->count();

            $readyNames = $orders->filter(function ($order) {
                return $order->progress == 'Selesai';
            })->pluck('user_name')->toArray();

            $readyCount = $orders->filter(function ($order) {
                return $order->progress == 'Selesai';
            })->count();

            $doneNames = $orders->filter(function ($order) {
                return $order->progress == 'Selesai Beneran';
            })->pluck('user_name')->toArray();

            $doneCount = $orders->filter(function ($order) {
                return $order->progress == 'Selesai Beneran';
            })->count();

            $today = Carbon::today()->toDateString();
            $orderDeadline = $orders->filter(function ($order) use ($today) {
                // Menggunakan Carbon untuk menghitung selisih tanggal
                if ($order->deadline_date) {
                    $deadline = Carbon::parse($order->deadline_date);
                    return $deadline->diffInDays($today) <= 21;
                }
            });

        $statuses = ['Pending', 'DP 1', 'DP 2', 'Lunas'];
        $paymentCounts = [];
        foreach ($statuses as $status) {
            $paymentCounts[$status] = $orders->where('payment_status', $status)->count();
        }

        $design_statuses = ['', 'Pending', 'ACC'];
        $designCounts = [];
        foreach ($design_statuses as $d) {
            $designCounts[$d] = $orders->where('design_status', $d)->count();
        }

        $notProcessedCounts = $pendingCount + $fixCount + $orderCount;
        $processedCounts = $productionCount + $readyCount + $doneCount;

        $currentYear = Carbon::now()->year;

        $monthlyCreatedAtCounts = [];
        foreach (range(1, 12) as $month) {
            $monthlyCreatedAtCounts[$month] = $orders->filter(function ($order) use ($currentYear, $month) {
                return  Carbon::parse($order->created_at)->year == $currentYear &&
                        Carbon::parse($order->created_at)->month == $month;
            })->count();
        }

        $monthlyDoneAtCounts = [];
        foreach (range(1, 12) as $month) {
            $monthlyDoneAtCounts[$month] = $orders->filter(function ($order) use ($currentYear, $month) {
                return  Carbon::parse($order->done_at)->year == $currentYear &&
                        Carbon::parse($order->done_at)->month == $month;
            })->count();
        }



        return view('admin.dashboard_invitation',
        compact(
            'orderDeadline',
            'pendingCount',
            'fixCount',
            'orderCount',
            'productionCount',
            'readyCount',
            'doneCount',
            'paymentCounts',
            'designCounts',
            'notProcessedCounts',
            'processedCounts',
            'monthlyCreatedAtCounts',
            'monthlyDoneAtCounts',
            'pendingNames',
            'fixNames',
            'orderNames',
            'prodNames',
            'readyNames',
            'doneNames'));
    }

    public function indexSouvenir()
    {
        $souvenirs = Souvenir::all()->map(function ($item) {
            $item->type = 'souvenir';
            return $item;
        });

        // Menggabungkan semua koleksi menjadi satu
        $orders = $souvenirs;

        $pendingNames = $orders->filter(function ($order) {
            return $order->progress == 'Pending';
        })->pluck('user_name')->toArray();

        $pendingCount = $orders->filter(function ($order) {
            return $order->progress == 'Pending';
        })->count();

        $fixNames = $orders->filter(function ($order) {
            return $order->progress == 'Fix';
        })->pluck('user_name')->toArray();

        $fixCount = $orders->filter(function ($order) {
            return $order->progress == 'Fix';
        })->count();

        $orderNames = $orders->filter(function ($order) {
            return $order->progress == 'Pemesanan Bahan';
        })->pluck('user_name')->toArray();

        $orderCount = $orders->filter(function ($order) {
            return $order->progress == 'Pemesanan Bahan';
        })->count();

        $prodNames = $orders->filter(function ($order) {
            return $order->progress == 'Proses Produksi';
        })->pluck('user_name')->toArray();

        $productionCount = $orders->filter(function ($order) {
            return $order->progress == 'Proses Produksi';
        })->count();

        $readyNames = $orders->filter(function ($order) {
            return $order->progress == 'Selesai';
        })->pluck('user_name')->toArray();

        $readyCount = $orders->filter(function ($order) {
            return $order->progress == 'Selesai';
        })->count();

        $doneNames = $orders->filter(function ($order) {
            return $order->progress == 'Selesai Beneran';
        })->pluck('user_name')->toArray();

        $doneCount = $orders->filter(function ($order) {
            return $order->progress == 'Selesai Beneran';
        })->count();

        $today = Carbon::today()->toDateString();
        $orderDeadline = $orders->filter(function ($order) use ($today) {
            // Menggunakan Carbon untuk menghitung selisih tanggal
            if ($order->deadline_date) {
                $deadline = Carbon::parse($order->deadline_date);
                return $deadline->diffInDays($today) <= 21;
            }
        });

        $statuses = ['Pending', 'DP 1', 'DP 2', 'Lunas'];
        $paymentCounts = [];
        foreach ($statuses as $status) {
            $paymentCounts[$status] = $orders->where('payment_status', $status)->count();
        }

        $design_statuses = ['', 'Pending', 'ACC'];
        $designCounts = [];
        foreach ($design_statuses as $d) {
            $designCounts[$d] = $orders->where('design_status', $d)->count();
        }

        $notProcessedCounts = $pendingCount + $fixCount + $orderCount;
        $processedCounts = $productionCount + $readyCount + $doneCount;

        $currentYear = Carbon::now()->year;

        $monthlyCreatedAtCounts = [];
        foreach (range(1, 12) as $month) {
            $monthlyCreatedAtCounts[$month] = $orders->filter(function ($order) use ($currentYear, $month) {
                return  Carbon::parse($order->created_at)->year == $currentYear &&
                        Carbon::parse($order->created_at)->month == $month;
            })->count();
        }

        $monthlyDoneAtCounts = [];
        foreach (range(1, 12) as $month) {
            $monthlyDoneAtCounts[$month] = $orders->filter(function ($order) use ($currentYear, $month) {
                return  Carbon::parse($order->done_at)->year == $currentYear &&
                        Carbon::parse($order->done_at)->month == $month;
            })->count();
        }



        return view('admin.dashboard_souvenir',
        compact(
            'orderDeadline',
            'pendingCount',
            'fixCount',
            'orderCount',
            'productionCount',
            'readyCount',
            'doneCount',
            'paymentCounts',
            'designCounts',
            'notProcessedCounts',
            'processedCounts',
            'monthlyCreatedAtCounts',
            'monthlyDoneAtCounts',
            'pendingNames',
            'fixNames',
            'orderNames',
            'prodNames',
            'readyNames',
            'doneNames'));
    }

    public function indexPackaging()
    {
        $packagings = Packaging::all()->map(function ($item) {
            $item->type = 'packaging';
            return $item;
        });

        // Menggabungkan semua koleksi menjadi satu
        $orders = $packagings;

        $pendingNames = $orders->filter(function ($order) {
            return $order->progress == 'Pending';
        })->pluck('user_name')->toArray();

        $pendingCount = $orders->filter(function ($order) {
            return $order->progress == 'Pending';
        })->count();

        $fixNames = $orders->filter(function ($order) {
            return $order->progress == 'Fix';
        })->pluck('user_name')->toArray();

        $fixCount = $orders->filter(function ($order) {
            return $order->progress == 'Fix';
        })->count();

        $orderNames = $orders->filter(function ($order) {
            return $order->progress == 'Pemesanan Bahan';
        })->pluck('user_name')->toArray();

        $orderCount = $orders->filter(function ($order) {
            return $order->progress == 'Pemesanan Bahan';
        })->count();

        $prodNames = $orders->filter(function ($order) {
            return $order->progress == 'Proses Produksi';
        })->pluck('user_name')->toArray();

        $productionCount = $orders->filter(function ($order) {
            return $order->progress == 'Proses Produksi';
        })->count();

        $readyNames = $orders->filter(function ($order) {
            return $order->progress == 'Selesai';
        })->pluck('user_name')->toArray();

        $readyCount = $orders->filter(function ($order) {
            return $order->progress == 'Selesai';
        })->count();

        $doneNames = $orders->filter(function ($order) {
            return $order->progress == 'Selesai Beneran';
        })->pluck('user_name')->toArray();

        $doneCount = $orders->filter(function ($order) {
            return $order->progress == 'Selesai Beneran';
        })->count();

        $today = Carbon::today()->toDateString();
        $orderDeadline = $orders->filter(function ($order) use ($today) {
            // Menggunakan Carbon untuk menghitung selisih tanggal
            if ($order->deadline_date) {
                $deadline = Carbon::parse($order->deadline_date);
                return $deadline->diffInDays($today) <= 21;
            }
        });

        $statuses = ['Pending', 'DP 1', 'DP 2', 'Lunas'];
        $paymentCounts = [];
        foreach ($statuses as $status) {
            $paymentCounts[$status] = $orders->where('payment_status', $status)->count();
        }

        $design_statuses = ['', 'Pending', 'ACC'];
        $designCounts = [];
        foreach ($design_statuses as $d) {
            $designCounts[$d] = $orders->where('design_status', $d)->count();
        }

        $notProcessedCounts = $pendingCount + $fixCount + $orderCount;
        $processedCounts = $productionCount + $readyCount + $doneCount;

        $currentYear = Carbon::now()->year;

        $monthlyCreatedAtCounts = [];
        foreach (range(1, 12) as $month) {
            $monthlyCreatedAtCounts[$month] = $orders->filter(function ($order) use ($currentYear, $month) {
                return  Carbon::parse($order->created_at)->year == $currentYear &&
                        Carbon::parse($order->created_at)->month == $month;
            })->count();
        }

        $monthlyDoneAtCounts = [];
        foreach (range(1, 12) as $month) {
            $monthlyDoneAtCounts[$month] = $orders->filter(function ($order) use ($currentYear, $month) {
                return  Carbon::parse($order->done_at)->year == $currentYear &&
                        Carbon::parse($order->done_at)->month == $month;
            })->count();
        }



        return view('admin.dashboard_packaging',
        compact(
            'orderDeadline',
            'pendingCount',
            'fixCount',
            'orderCount',
            'productionCount',
            'readyCount',
            'doneCount',
            'paymentCounts',
            'designCounts',
            'notProcessedCounts',
            'processedCounts',
            'monthlyCreatedAtCounts',
            'monthlyDoneAtCounts',
            'pendingNames',
            'fixNames',
            'orderNames',
            'prodNames',
            'readyNames',
            'doneNames'));
    }

    public function createNewAdminShow(){
        return view('admin.master-data.create_admin');
    }

    public function changeCredentialsShow(){
        return view('admin.master-data.change_password');
    }

    public function createNewAdmin(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $admin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin'
        ]);

        return redirect()->back()->with('success', 'Admin berhasil dibuat!');
    }

    public function changeCredentials(Request $request) {
        $admin = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8',
            'new_password' => 'nullable|string|min:8',
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->new_password);
        }

        $admin->save();

        return redirect()->back()->with('success', 'Credential admin berhasil diperbarui!');
    }
}
