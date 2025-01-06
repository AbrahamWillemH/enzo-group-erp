<?php

namespace App\Http\Controllers;

use App\Models\AllOrder;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index()
    {
        return view('admin.orders');
    }

    public function create()
    {
        return view('user.orders.invitation_create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'instagram' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'type' => 'required|string|max:255',
            'deadline_date' => 'required|date',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|string|max:255',
            'grooms_name' => 'required|string|max:255',
            'grooms_nickname' => 'required|string|max:255',
            'grooms_dad' => 'required|string|max:255',
            'grooms_mom' => 'required|string|max:255',
            'brides_name' => 'required|string|max:255',
            'brides_nickname' => 'required|string|max:255',
            'brides_dad' => 'required|string|max:255',
            'brides_mom' => 'required|string|max:255',
        ]);

        // Mengambil user yang sedang login
        $user = auth()->user();

        // Menyimpan data dengan user_id
        $order = new Invitation($validated);
        $order->user_id = $user->id; // Set user_id dengan ID user yang sedang login
        $order->user_name = $user->name;
        $order->save();

        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }


    // public function updateProgress($id)
    // {
    //     if (auth()->user()->role !== 'admin') {
    //         return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
    //     }

    //     $order = Invitation::find($id);
    //     $order = Invitation::find($id);
    //     $order = Invitation::find($id);
    //     $order = Invitation::find($id);

    //     if (!$order) {
    //         return redirect()->back()->with('error', 'Invitation not found.');
    //     }

    //     // Enum status progress
    //     $progressStages = [
    //         'Pemesanan Bahan',
    //         'Proses Produksi',
    //         'Finishing',
    //         'Selesai'
    //     ];

    //     // Dapatkan index progress saat ini
    //     $currentProgressIndex = array_search($order->progress, $progressStages);

    //     if ($currentProgressIndex === false || $currentProgressIndex == count($progressStages) - 1) {
    //         return redirect()->back()->with('info', 'This order is already completed.');
    //     }

    //     $order->progress = $progressStages[$currentProgressIndex + 1];
    //     $order->save();

    //     return redirect()->back()->with('success', 'Invitation progress updated to ' . $order->progress);
    // }

    // public function previousProgress($id)
    // {
    //     if (auth()->user()->role !== 'admin') {
    //         return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
    //     }

    //     $order = Invitation::find($id);

    //     if (!$order) {
    //         return redirect()->back()->with('error', 'Invitation not found.');
    //     }

    //     // Enum status progress
    //     $progressStages = [
    //         'Pemesanan Bahan',
    //         'Proses Produksi',
    //         'Finishing',
    //         'Selesai'
    //     ];

    //     // Dapatkan index progress saat ini
    //     $currentProgressIndex = array_search($order->progress, $progressStages);

    //     // Pastikan progress saat ini bukan yang pertama dalam urutan
    //     if ($currentProgressIndex === false || $currentProgressIndex == 0) {
    //         return redirect()->back()->with('info', 'This order is already at the first progress stage.');
    //     }

    //     // Update progress ke sebelumnya
    //     $order->progress = $progressStages[$currentProgressIndex - 1];
    //     $order->save();

    //     return redirect()->back()->with('success', 'Invitation progress reverted to ' . $order->progress);
    // }


    public function approveOrder($id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->status = 'Dikonfirmasi';
        $invitation->save();

        return redirect()->back()->with('success', 'Pesanan telah dikonfirmasi');
    }

    public function declineOrder($id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->status = 'Ditolak';
        $invitation->save();

        return redirect()->back()->with('error', 'Pesanan telah ditolak');
    }
}
