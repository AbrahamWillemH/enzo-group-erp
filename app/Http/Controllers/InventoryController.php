<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryRekapStok;
use App\Models\InventoryBarangMasuk;
use App\Models\InventoryBarangKeluar;


class InventoryController extends Controller
{
    public function index($jenis_inventory)
    {
        $rekapStok = InventoryRekapStok::where('jenis_inventory', $jenis_inventory)->get();
        $barangMasuk = InventoryBarangMasuk::where('jenis_inventory', $jenis_inventory)->get();
        $barangKeluar = InventoryBarangKeluar::where('jenis_inventory', $jenis_inventory)->get();

        return view('frontend.inventorytest', compact('rekapStok', 'barangMasuk', 'barangKeluar', 'jenis_inventory'));
    }

    public function storeRekapStok(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:inventory_rekap_stok',
            'nama_barang' => 'required|string',
            'stok_awal' => 'required|integer',
            'barang_masuk' => 'required|integer',
            'barang_keluar' => 'required|integer',
            'stok_akhir' => 'required|integer',
            'harga' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'jenis_inventory' => 'required|string'
        ]);

        InventoryRekapStok::create($validatedData);
        return redirect()->back()->with('success', 'Rekap stok berhasil ditambahkan!');
    }

    public function updateRekapStok(Request $request, $kode_barang)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'stok_awal' => 'required|integer',
            'barang_masuk' => 'required|integer',
            'barang_keluar' => 'required|integer',
            'stok_akhir' => 'required|integer',
            'harga' => 'required|numeric',
            'total_harga' => 'required|numeric'
        ]);
    
        $rekapStok = InventoryRekapStok::where('kode_barang', $kode_barang)->first();
    
        if (!$rekapStok) {
            return response()->json(['error' => 'Record not found'], 404);
        }
    
        $rekapStok->update($validatedData);
    
        return response()->json(['message' => 'Rekap stok updated successfully', 'data' => $rekapStok]);
    }

    public function deleteRekapStok($kode_barang)
    {
        InventoryRekapStok::where('kode_barang', $kode_barang)->delete();
        return redirect()->back()->with('success', 'Rekap stok berhasil dihapus!');
    }

    public function storeBarangMasuk(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'harga' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'catatan' => 'nullable|string',
            'jenis_inventory' => 'required|string'
        ]);

        InventoryBarangMasuk::create($validatedData);
        return redirect()->back()->with('success', 'Barang masuk berhasil ditambahkan!');
    }

    public function updateBarangMasuk(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'harga' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'catatan' => 'nullable|string',
            'jenis_inventory' => 'required|string'
        ]);

        $barangMasuk = InventoryBarangMasuk::findOrFail($id);
        $barangMasuk->update($validatedData);

        return redirect()->back()->with('success', 'Barang masuk berhasil diupdate!');
    }

    public function deleteBarangMasuk($id)
    {
        InventoryBarangMasuk::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Barang masuk berhasil dihapus!');
    }

    public function storeBarangKeluar(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'harga' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'nama_cust' => 'required|string',
            'jumlah_order' => 'required|integer',
            'jenis_inventory' => 'required|string'
        ]);

        InventoryBarangKeluar::create($validatedData);
        return redirect()->back()->with('success', 'Barang keluar berhasil ditambahkan!');
    }

    public function updateBarangKeluar(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'harga' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'nama_cust' => 'required|string',
            'jumlah_order' => 'required|integer',
            'jenis_inventory' => 'required|string'
        ]);

        $barangKeluar = InventoryBarangKeluar::findOrFail($id);
        $barangKeluar->update($validatedData);

        return redirect()->back()->with('success', 'Barang keluar berhasil diupdate!');
    }

    public function deleteBarangKeluar($id)
    {
        InventoryBarangKeluar::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Barang keluar berhasil dihapus!');
    }
}