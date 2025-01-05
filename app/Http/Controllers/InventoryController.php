<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\InventoryTransaction;
use App\Models\InventoryCard;

class InventoryController extends Controller
{
    // Menampilkan halaman utama dengan filter jenis_barang
    public function index(Request $request)
    {
        $jenis_barang = $request->get('jenis_barang', ''); // Default kosong
        $kode_bahan = $request->get('kode_bahan', '');

        // Filter data berdasarkan jenis_barang
        $inventory = Inventory::all();
        $transaksi = InventoryTransaction::where('jenis_barang', $jenis_barang)->get();
        $kartu_persediaan = InventoryCard::where('jenis_barang', $jenis_barang)->get();

        // Stok real-time untuk kartu persediaan
        $stok_data = null;
        if ($kode_bahan) {
            $stok_data = InventoryCard::where('jenis_barang', $jenis_barang)
                        ->where('kode_bahan', $kode_bahan)
                        ->first();
        }

        return view('admin.inventory.index', compact('inventory', 'transaksi', 'kartu_persediaan', 'jenis_barang', 'kode_bahan', 'stok_data'));
    }

    // Menambahkan data baru ke tabel inventory
    public function store(Request $request)
    {
        $request->validate([
            'jenis_barang' => 'required|string',
            'kode_bahan' => 'required|integer',
            'nama_bahan' => 'required|string',
            'stok_awal' => 'required|integer',
        ]);

        Inventory::create($request->all());
        return redirect()->route('inventory.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form untuk edit data
    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('admin.inventory.edit', compact('inventory'));
    }

    // Update data inventory
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_barang' => 'required|string',
            'kode_bahan' => 'required|integer',
            'nama_bahan' => 'required|string',
            'stok_awal' => 'required|integer',
        ]);

        $inventory = Inventory::findOrFail($id);
        $inventory->update($request->all());
        return redirect()->route('inventory.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data inventory
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Data berhasil dihapus.');
    }

    public function filter(Request $request){
        // ini nanti fungsi buat ngefilter tabel
    }
}
