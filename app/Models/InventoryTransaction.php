<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    use HasFactory;

    protected $table = 'inventory_transactions';

    protected $fillable = [
        'inventory_id',
        'jenis_barang', 
        'tanggal_transaksi', 
        'kode_bahan', 
        'nama_bahan', 
        'tipe_transaksi', 
        'jumlah_barang', 
        'keterangan',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }

    protected static function booted()
    {
        static::created(function ($transaction) {
            $transaction->updateStock();
        });

        static::updated(function ($transaction) {
            $transaction->updateStock();
        });
    }

    public function updateStock()
    {
        $inventory = $this->inventory;

        if ($this->tipe_transaksi === 'Pembelian') {
            // Menambah stok berdasarkan stok_sekarang
            $inventory->stok_sekarang += $this->jumlah_barang;
        } elseif ($this->tipe_transaksi === 'Pemakaian') {
            // Mengurangi stok berdasarkan stok_sekarang
            $inventory->stok_sekarang -= $this->jumlah_barang;
        }

        $inventory->save();
    }
}