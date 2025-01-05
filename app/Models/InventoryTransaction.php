<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    use HasFactory;

    protected $table = 'inventory_transactions';


    protected $fillable = ['inventory_id', 'jenis_barang', 'tanggal_transaksi', 'kode_bahan', 'nama_bahan', 'tipe_transaksi', 'jumlah_barang', 'keterangan'];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }
}

