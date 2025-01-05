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
        $inventories = Inventory::all();
        return view('admin.inventory.transactions', compact('transactions', 'inventories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'inventory_id' => 'required',
            'tanggal_transaksi' => 'required|date',
            'tipe_transaksi' => 'required|in:Pembelian,Pemakaian',
            'jumlah_barang' => 'required|integer|min:1',
        ]);

        $transaction = InventoryTransaction::create($request->all());

        // Update stok real-time
        $inventory = Inventory::find($request->inventory_id);
        if ($request->tipe_transaksi == 'Pembelian') {
            $inventory->stok_awal += $request->jumlah_barang;
        } elseif ($request->tipe_transaksi == 'Pemakaian') {
            $inventory->stok_awal -= $request->jumlah_barang;
        }
        $inventory->save();

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan.');
    }
}
