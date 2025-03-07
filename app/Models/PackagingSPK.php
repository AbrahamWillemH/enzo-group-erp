<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackagingSPK extends Model
{
    protected $table = 'spk_packaging';

    protected $primaryKey = 'id';

    protected $fillable = [
        'packaging_id',
        'foil',
        'kertas_foil',
        'laminasi',
        'pita',
        'attire_thankscard',
        'embos',
        'tali',
        'warna_tali',
        'brosur',
        'ornamen',
        'lain_lain',
        'sekat',
        'note_tambahan',
        'nama_bahan',
        'ukuran',
        'kebutuhan',
        'stok',
        'jumlah_beli',
        'supplier',
    ];

    public function packaging()
    {
        return $this->belongsTo(Packaging::class);
    }
}
