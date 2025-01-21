<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Illuminate\Http\Request;

class SouvenirController extends Controller
{
    public function index()
    {
        $souvenir = Souvenir::all()->map(function ($item) {
            $item->type = 'souvenir';
            return $item;
        });

        return view('admin.souvenir', compact('souvenir'));
    }
}
