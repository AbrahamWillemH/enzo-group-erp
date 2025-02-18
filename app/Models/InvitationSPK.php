<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationSPK extends Model
{
    protected $table = 'spk_invitation';

    protected $primaryKey = 'id';

    protected $fillable = [
        'invitation_id',
        'foil',
        'kertas_foil',
        'laminasi',
        'kartu',
        'label_nama',
        'plastik',
        'gunungan',
        'tussel',
        'pita',
        'tali_rami',
        'waxseal',
        'kalkir',
        'kain_goni',
        'ornamen',
        'note_tambahan',
        'peruntukan',
        'nama_ukuran',
        'kebutuhan',
        'stok',
        'jumlah_beli',
        'supplier',
        'lain_lain'
    ];

    public $timestamps = false;

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
