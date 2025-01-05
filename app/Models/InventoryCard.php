<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryCard extends Model
{
    protected $table = 'inventory_card';

    protected $fillable = ['inventory_id', 'transaction_id', 'jenis_barang', 'kode_bahan', 'nama_bahan', 'stok'];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }
}
