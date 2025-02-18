<?php

namespace App\Http\Controllers;

use App\Models\SouvenirSPK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SouvenirSPKController extends Controller
{

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'foil' => 'nullable|string|max:255',
            'kertas_foil' => 'nullable|string|max:255',
            'laminasi' => 'nullable|string|max:255',
            'pita' => 'nullable|string|max:255',
            'attire_thankscard' => 'nullable|string|max:255',
            'embos' => 'nullable|string|max:255',
            'tali' => 'nullable|string|max:255',
            'warna_tali' => 'nullable|string|max:255',
            'brosur' => 'nullable|string|max:255',
            'ornamen' => 'nullable|string|max:255',
            'lain_lain'=> 'nullable|string|max:255',
            'sekat' => 'nullable|string|max:255',
            'note_tambahan' => 'nullable|string|max:255',
            'nama_bahan' => 'nullable|string|max:255',
            'ukuran' => 'nullable|string|max:255',
            'kebutuhan' => 'nullable|integer',
            'stok' => 'nullable|integer',
            'jumlah_beli' => 'nullable|integer',
            'supplier' => 'nullable|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $validated = $validator->validated();

        // Ambil data berdasarkan ID dan update
        $order = SouvenirSPK::where('souvenir_id', $id)->firstOrFail();
        $order->update($validated);

        return redirect()->route('admin.souvenir.detail', $id);
    }

    public function edit($id)
    {
        $souvenir_spk = SouvenirSPK::findOrFail($id);
        return view('admin.souvenir_detail', compact('souvenir_spk'));
    }
}
