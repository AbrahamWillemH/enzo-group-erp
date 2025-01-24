<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryBarangKeluar extends Model
{
    protected $table = 'barang_keluar';

    protected $fillable = [
        'jenis_inventory',
        'tanggal',
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'harga',
        'total_harga',
        'nama_cust',
        'jumlah_order'
    ];
}
