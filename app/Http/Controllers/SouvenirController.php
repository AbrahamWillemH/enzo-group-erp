<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
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
        $order->id = Souvenir::generatePackagingId();

        $order->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function souvenirDetails($id){
        $souvenir = DB::table('souvenir')->find($id);
        return view('admin.souvenir_detail', compact('souvenir'));
    }
}
