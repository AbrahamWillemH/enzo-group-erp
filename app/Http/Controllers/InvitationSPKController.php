<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\InvitationSPK;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InvitationSPKController extends Controller
{
    public function store(Request $request)
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
            'peruntukan' => 'nullable|string|max:255',
            'nama_ukuran' => 'nullable|integer',
            'kebutuhan' => 'nullable|integer',
            'stok' => 'nullable|integer',
            'jumlah_beli' => 'nullable|integer',
            'supplier' => 'nullable|string|max:255',
            'lain_lain'=> 'nullable|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $validated = $validator->validated();

        // Menetapkan invitation_id dari request
        $validated['invitation_id'] = $request->id;

        // Menyimpan data ke dalam model
        $order = new InvitationSPK($validated);
        $order->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }


    public function edit($id)
    {
        $invitation_spk = InvitationSPK::findOrFail($id);
        return view('admin.invitation_detail', compact('invitation_spk'));
    }
}
