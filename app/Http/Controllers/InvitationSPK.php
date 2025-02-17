<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\InvitationSPK;

class InvitationSPK extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foil' => 'required|string|max:255',
            'kertas_foil' => 'required|string|max:255',
            'laminasi' => 'required|string|max:255',
            'kartu' => 'required|string|max:255',
            'label_nama' => 'required|string|max:255',
            'plastik' => 'required|string|max:255',
            'gulungan' => 'required|string|max:255',
            'tussel' => 'required|string|max:255',
            'pita' => 'required|string|max:255',
            'tali_rami' => 'required|string|max:255',
            'waxseal' => 'required|string|max:255',
            'kalkir' => 'required|string|max:255',
            'kain_goni' => 'required|string|max:255',
            'ornamen' => 'required|string|max:255',
            'note_tambahan' => 'required|string|max:255',
            'peruntukan' => 'required|string|max:255',
            'nama_ukuran' => 'required|integer',
            'kebutuhan' => 'required|integer',
            'stok' => 'required|integer',
            'jumlah_beli' => 'required|integer',
            'supplier' => 'required|string|max:255'
        ]);

        $validated = $validator->validated();
        $user = auth()->admin();
        $order = new InvitationSPK($validated);
        $order->user_id = $user->id;
        $order->type = 'invitation';
        $order->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }
}
