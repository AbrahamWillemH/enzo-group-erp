<?php

namespace App\Http\Controllers;

use App\Models\PackagingSPK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackagingSPKController extends Controller
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
            'lain_lain' => 'nullable|string|max:255',
            'sekat' => 'nullable|string|max:255',
            'note_tambahan' => 'nullable|string|max:255',

            // JSON VALIDATOR
            'nama_bahan' => 'nullable|array',
            'nama_bahan.*' => 'nullable|string|max:255',
            'ukuran' => 'nullable|array',
            'ukuran.*' => 'nullable|string|max:255',
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
        $validated['ukuran'] = json_encode($request->ukuran ?? []);
        $validated['kebutuhan'] = json_encode($request->kebutuhan ?? []);
        $validated['stok'] = json_encode($request->stok ?? []);
        $validated['jumlah_beli'] = json_encode($request->jumlah_beli ?? []);
        $validated['supplier'] = json_encode($request->supplier ?? []);

        // Ambil data berdasarkan ID dan update
        $order = PackagingSPK::where('packaging_id', $id)->firstOrFail();
        $order->update($validated);

        return redirect()->route('admin.packaging.detail', $id);
    }

    public function edit($id)
    {
        $packaging_spk = PackagingSPK::findOrFail($id);

        return view('admin.packaging_detail', compact('packaging_spk'));
    }
}
