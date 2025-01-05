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
    ];

    /**
     * Relasi ke tabel transaksi_persediaan.
     */
    public function transactions()
    {
        return $this->hasMany(Inventory::class, 'inventory_id');
    }

    /**
     * Tambah stok barang.
     */
    public function addStock($jumlah_barang)
    {
        $this->stok += $jumlah_barang;
        $this->save();
    }

    /**
     * Kurangi stok barang.
     */
    public function removeStock($jumlah_barang)
    {
        if ($this->stok >= $jumlah_barang) {
            $this->stok -= $jumlah_barang;
            $this->save();
        } else {
            throw new \Exception('Stok tidak mencukupi.');
        }
    }

    /**
     * Simpan transaksi.
     */
    public function addTransaction($type, $kode_bahan, $jumlah_barang, $tanggal_transaksi, $keterangan = null)
    {
        InventoryTransaction::create([
            'inventory_id' => $this->id,
            'tipe_transaksi' => $type,
            'kode_bahan' => $kode_bahan,
            'jumlah_barang' => $jumlah_barang,
            'tanggal_transaksi' => $tanggal_transaksi,
            'keterangan' => $keterangan,
        ]);
    }
}



