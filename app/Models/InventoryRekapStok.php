<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryRekapStok extends Model
{
    protected $table = 'rekap_stok';

    protected $primaryKey = 'kode_barang';

    protected $fillable = [
        'kode_barang',
        'jenis_inventory',
        'nama_barang',
        'stok_awal',
        'barang_masuk',
        'barang_keluar',
        'stok_akhir',
        'harga',
        'total_harga',
    ];
}
