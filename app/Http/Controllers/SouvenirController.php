<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Validator;

class SouvenirController extends Controller
{
    public function index()
    {
        $souvenir = Souvenir::all()->map(function ($item) {
            $item->type = 'souvenir';
            return $item;
        });

        return view('admin.souvenir', compact('souvenir'));
    }

    public function create()
    {
        return view('user.orders.souvenir_create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'address' => 'required|string|max:1000',
            'event_date' => 'required|date',
            'bridegroom_name' => 'required|string|max:255',
            'pack' => 'required|string|max:255',
            'design' => 'required|string|max:255',
            'thankscard' => 'required|string|max:255',
            'color_motif' => 'required|string|max:255',
            'motif_backup' => 'required|string|max:255',
        ]);


        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Proses simpan data jika validasi berhasil
        $validated = $validator->validated();
        $user = auth()->user();
        $order = new Souvenir($validated);
        $order->user_id = $user->id;
        $order->type = 'Souvenir';
        $order->id = Souvenir::generateSouvenirId();

        $order->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id){
        $souvenir = Souvenir::findOrFail($id);
        // dd($Souvenir);
        return view('admin.souvenir_edit', compact('souvenir'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'bridegroom_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'product_name' => 'required|string|max:255',
            'pack' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'design' => 'required|string|max:255',
            'thankscard' => 'required|string|max:255',
            'color_motif' => 'required|string|max:255',
            'motif_backup' => 'nullable|string|max:255',
            'quantity' => 'required|integer',
            'deadline_date' => 'nullable|date',
            'progress' => 'required|string|max:255',
            'payment_status' => 'required|string|max:255',
            'dp2_date' => 'nullable|date',
            'price_per_pcs' => 'nullable|integer',
            'expedition' => 'nullable|string|max:255',
            'printout' => 'nullable|string|max:255',
            'design_status' => 'nullable|string|max:255',
        ]);

        // dd($request->all());

        $order = Souvenir::findOrFail($id);
        $order->update($validated);

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function souvenirDetails($id){
        $souvenir = DB::table('souvenir')->find($id);
        $purchase = DB::table('purchase_souvenir')
        ->where('souvenir_id', $id)
        ->get()
        ->map(function ($item) {
            $item->date = Carbon::parse($item->date)->format('d/m/Y');
            return $item;
        });
        return view('admin.souvenir_detail', compact('souvenir', 'purchase'));
    }

    public function updatePaymentStatus(Request $request)
    {
        // Perbarui status pembayaran di database
        $order = Souvenir::findOrFail($request->order_id);
        $order->payment_status = $request->payment_status;
        $order->save();

        return $this->index();
    }
}
