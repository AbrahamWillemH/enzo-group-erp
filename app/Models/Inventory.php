<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'jenis_barang', 
        'kode_bahan', 
        'nama_bahan', 
        'stok_awal',
        'stok_sekarang',
    ];

    public function transactions()
    {
        return $this->hasMany(InventoryTransaction::class);
    }
}