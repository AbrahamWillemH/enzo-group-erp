<?php

namespace App\Http\Controllers;

use App\Models\PackagingSPK;
use Illuminate\Http\Request;

class PackagingSPKController extends Controller
{
    public function store(Request $request)
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
        $order = new PackagingSPK($validated);
        $order->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $packaging_spk = PackagingSPK::findOrFail($id);
        return view('admin.packaging_detail', compact('packaging_spk'));
    }
}
