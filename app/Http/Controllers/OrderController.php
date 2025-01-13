<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Packaging;
use App\Models\SeminarKit;
use App\Models\Souvenir;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private array $progressStages = [
        'Pemesanan Bahan',
        'Proses Produksi',
        'Finishing',
        'Selesai'
    ];

    private function getOrders()
    {
        $invitations = Invitation::all()->map(function ($item) {
            $item->setAttribute('type', 'invitation');
            return $item;
        });

        $souvenirs = Souvenir::all()->map(function ($item) {
            $item->setAttribute('type', 'souvenir');
            return $item;
        });

        $seminarkits = SeminarKit::all()->map(function ($item) {
            $item->setAttribute('type', 'seminar_kit');
            return $item;
        });

        $packagings = Packaging::all()->map(function ($item) {
            $item->setAttribute('type', 'packaging');
            return $item;
        });

        return $invitations
            ->concat($souvenirs)
            ->concat($seminarkits)
            ->concat($packagings);
    }

    private function updateOrderProgress($order, $id, $progress)
    {
        $modelClass = match($order->type) {
            'invitation' => Invitation::class,
            'souvenir' => Souvenir::class,
            'seminar_kit' => SeminarKit::class,
            'packaging' => Packaging::class,
        };

        $modelClass::where('id', $id)->update(['progress' => $progress]);
    }

    public function updateProgress($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $orders = $this->getOrders();
        $order = $orders->firstWhere('id', $id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $currentProgressIndex = array_search($order->progress, $this->progressStages);

        if ($currentProgressIndex === false || $currentProgressIndex == count($this->progressStages) - 1) {
            return redirect()->back()->with('info', 'This order is already completed.');
        }

        $nextProgress = $this->progressStages[$currentProgressIndex + 1];
        $this->updateOrderProgress($order, $id, $nextProgress);

        return redirect()->back()->with('success', 'Order progress updated to ' . $nextProgress);
    }

    public function previousProgress($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'You do not have permission to update progress.');
        }

        $orders = $this->getOrders();
        $order = $orders->firstWhere('id', $id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $currentProgressIndex = array_search($order->progress, $this->progressStages);

        if ($currentProgressIndex === false || $currentProgressIndex == 0) {
            return redirect()->back()->with('info', 'This order is already at the first progress stage.');
        }

        $previousProgress = $this->progressStages[$currentProgressIndex - 1];
        $this->updateOrderProgress($order, $id, $previousProgress);

        return redirect()->back()->with('success', 'Order progress reverted to ' . $previousProgress);
    }
    public function orderDetails($id){
    $invitation = DB::table('invitation')->where('id', $id)->first();
    $packaging = DB::table('packaging')->where('id', $id)->first();
    $seminarkit = DB::table('seminarkit')->where('id', $id)->first();
    $souvenir = DB::table('souvenir')->where('id', $id)->first();

    if ($invitation) {
        return app(InvitationController::class)->invitationDetails($id);
    }
    if ($packaging) {
        return app(PackagingController::class)->packagingDetails($id);
    }
    if ($seminarkit) {
        return app(SeminarKitController::class)->seminarkitDetails($id);
    }
    if ($souvenir) {
        return app(SouvenirController::class)->souvenirDetails($id);
    }


    }
}
