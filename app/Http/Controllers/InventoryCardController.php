<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryCardController extends Controller
{
    public function index()
    {
        $inventories = Inventory::with('transactions')->get();
        return view('admin.inventory.card', compact('inventories'));
    }

    public function show($id)
    {
        $inventory = Inventory::with('transactions')->findOrFail($id);
        $stok_sekarang = $inventory->stok_awal;

        return view('admin.inventory.card-show', compact('inventory', 'stok_sekarang'));
    }
}
