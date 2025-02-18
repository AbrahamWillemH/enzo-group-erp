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
            'motif' => 'nullable|string|max:255',
            'ukuran_kain' => 'nullable|string|max:255',
            'tali' => 'nullable|string|max:255',
            'zipper' => 'nullable|string|max:255',
            'kepala_zipper' => 'nullable|string|max:255',
            'lain_lain' => 'nullable|string|max:255',
            'jenis_kertas'=> 'nullable|string|max:255',
            'ukuran_kertas' => 'nullable|string|max:255',
            'ukuran_mika' => 'nullable|string|max:255',
            'pita' => 'nullable|string|max:255',
            'model_pita' => 'nullable|string|max:255',
            'note_tambahan' => 'nullable|string|max:255',

            // JSON VALIDATOR
            'nama_bahan' => 'nullable|array',
            'nama_bahan.*' => 'nullable|string|max:255',
            'kebutuhan' => 'nullable|array',
            'kebutuhan.*' => 'nullable|integer',
            'stok' => 'nullable|array',
            'stok.*' => 'nullable|integer',
            'jumlah_beli' => 'nullable|array',
            'jumlah_beli.*' => 'nullable|integer',
            'supplier' => 'nullable|array',
            'supplier.*' => 'nullable|string|max:255',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $validated = $validator->validated();

        $validated['nama_bahan'] = json_encode($request->nama_bahan ?? []);
        $validated['kebutuhan'] = json_encode($request->kebutuhan ?? []);
        $validated['stok'] = json_encode($request->stok ?? []);
        $validated['jumlah_beli'] = json_encode($request->jumlah_beli ?? []);
        $validated['supplier'] = json_encode($request->supplier ?? []);

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
