<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Tampilkan halaman inventory untuk admin.
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('admin.inventory', compact('inventories'));
    }

    /**
     * Tambah barang baru ke inventory.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'unit' => 'required|string|max:50',
            'description' => 'nullable|string|max:1000',
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventory.index')->with('success', 'Barang berhasil ditambahkan ke inventory!');
    }

    /**
     * Update stok barang di inventory.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $inventory = Inventory::findOrFail($id);
        $inventory->update($request->only(['stock']));

        return redirect()->route('inventory.index')->with('success', 'Stok barang berhasil diperbarui!');
    }

    /**
     * Hapus barang dari inventory.
     */
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        return redirect()->route('inventory.index')->with('success', 'Barang berhasil dihapus dari inventory!');
    }
}
