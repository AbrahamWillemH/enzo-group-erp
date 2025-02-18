<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\InvitationSPK;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InvitationSPKController extends Controller
{
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'foil' => 'nullable|string|max:255',
            'kertas_foil' => 'nullable|string|max:255',
            'laminasi' => 'nullable|string|max:255',
            'kartu' => 'nullable|string|max:255',
            'label_nama' => 'nullable|string|max:255',
            'plastik' => 'nullable|string|max:255',
            'gunungan' => 'nullable|string|max:255',
            'tussel' => 'nullable|string|max:255',
            'pita' => 'nullable|string|max:255',
            'tali_rami' => 'nullable|string|max:255',
            'waxseal' => 'nullable|string|max:255',
            'kalkir' => 'nullable|string|max:255',
            'kain_goni' => 'nullable|string|max:255',
            'ornamen' => 'nullable|string|max:255',
            'note_tambahan' => 'nullable|string|max:255',

            // FOR JSON TYPES.
            'peruntukan' => 'nullable|array',
            'peruntukan.*' => 'nullable|string|max:255',
            'nama_ukuran' => 'nullable|array',
            'nama_ukuran.*' => 'nullable|string|max:255',
            'kebutuhan' => 'nullable|array',
            'kebutuhan.*' => 'nullable|integer',
            'stok' => 'nullable|array',
            'stok.*' => 'nullable|integer',
            'jumlah_beli' => 'nullable|array',
            'jumlah_beli.*' => 'nullable|integer',
            'supplier' => 'nullable|array',
            'supplier.*' => 'nullable|string|max:255',

            'lain_lain'=> 'nullable|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $validated = $validator->validated();

        // Ubah array menjadi JSON
        $validated['peruntukan'] = json_encode($request->peruntukan ?? []);
        $validated['nama_ukuran'] = json_encode($request->nama_ukuran ?? []);
        $validated['kebutuhan'] = json_encode($request->kebutuhan ?? []);
        $validated['stok'] = json_encode($request->stok ?? []);
        $validated['jumlah_beli'] = json_encode($request->jumlah_beli ?? []);
        $validated['supplier'] = json_encode($request->supplier ?? []);

        // Simpan ke database
        $order = InvitationSPK::where('invitation_id', $id)->firstOrFail();
        $order->update($validated);


        return redirect()->route('admin.invitation.detail', $id);
    }



    // public function edit($id)
    // {
    //     $invitation_spk = InvitationSPK::findOrFail($id);
    //     return view('admin.invitation_detail', compact('invitation_spk'));
    // }
}
