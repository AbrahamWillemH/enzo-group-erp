<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Packaging;
use App\Models\Souvenir;
use Carbon\Carbon;
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

    public function __construct()
    {
        $this->middleware('auth'); // Pastikan hanya user yang login dapat mengakses
        $this->middleware(function ($request, $next) {
            if (Auth::user()->role !== 'admin') {
                return response()->json(['message' => 'Unauthorized'], 403);
            }
            return $next($request);
        });
    }

    // Fungsi untuk mengubah credential admin
    public function updateCredential(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:8|confirmed',
        ]);

        $admin = Auth::user();
        $admin->name = $request->name;
        $admin->email = $request->email;

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return response()->json(['message' => 'Credential updated successfully.']);
    }

    // Fungsi untuk menambah akun admin baru
    public function createAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // Set default role sebagai admin
        ]);

        return response()->json(['message' => 'Admin account created successfully.', 'user' => $user]);
    }
}
