<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SouvenirSPK extends Model
{
    protected $table = 'spk_souvenir';

    protected $primaryKey = 'id';

    protected $fillable = [
        'souvenir_id',
        'motif',
        'ukuran_kain',
        'tali',
        'zipper',
        'kepala_zipper',
        'lain_lain',
        'jenis_kertas',
        'ukuran_kertas',
        'ukuran_mika',
        'pita',
        'model_pita',
        'note_tambahan',
        'nama_bahan',
        'kebutuhan',
        'stok',
        'jumlah_beli',
        'supplier'
    ];

    public function souvenir()
    {
        return $this->belongsTo(Souvenir::class);
    }
}
