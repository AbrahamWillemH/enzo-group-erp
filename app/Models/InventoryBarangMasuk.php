<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryBarangMasuk extends Model
{
    protected $table = 'barang_masuk';

    protected $fillable = [
        'jenis_inventory',
        'tanggal',
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'harga',
        'total_harga',
        'catatan',
    ];
}
