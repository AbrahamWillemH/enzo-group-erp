<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryTransaction;
use Illuminate\Http\Request;

class InventoryTransactionController extends Controller
{
    public function index()
    {
        $transactions = InventoryTransaction::with('inventory')->get();
        $inventory = Inventory::all();
        return view('admin.inventory.transactions', compact('transactions', 'inventory'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'inventory_id' => 'required',
            'tanggal_transaksi' => 'required|date',
            'kode_bahan' => 'required|integer',
            'tipe_transaksi' => 'required|in:Pembelian,Pemakaian',
            'jumlah_barang' => 'required|integer|min:1',
            'keterangan' => 'nullable|string'
        ]);

        $inventory = Inventory::find($request->inventory_id);
        if (!$inventory) {
            return redirect()->back()->with('error', 'Barang tidak ditemukan!');
        }

        if ($request->tipe_transaksi === 'Pemakaian' && $inventory->stok_sekarang < $request->jumlah_barang) {
            return redirect()->back()->with('error', 'Stok tidak mencukupi untuk transaksi Pemakaian!');
        }

        $transaction = new InventoryTransaction();
        $transaction->inventory_id = $request->inventory_id;
        $transaction->jenis_barang = $inventory->jenis_barang; // Set jenis_barang from inventory
        $transaction->tanggal_transaksi = $request->tanggal_transaksi;
        $transaction->kode_bahan = $request->kode_bahan;
        $transaction->nama_bahan = $inventory->nama_bahan;
        $transaction->tipe_transaksi = $request->tipe_transaksi;
        $transaction->jumlah_barang = $request->jumlah_barang;
        $transaction->keterangan = $request->keterangan;
        $transaction->save();

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan.');
    }
}
