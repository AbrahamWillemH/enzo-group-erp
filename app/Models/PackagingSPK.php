<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackagingSPK extends Model
{
    protected $table = 'spk_packaging';

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
}
