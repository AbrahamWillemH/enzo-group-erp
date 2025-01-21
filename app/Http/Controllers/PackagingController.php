<?php

namespace App\Http\Controllers;

use App\Models\Packaging;
use Illuminate\Http\Request;

class PackagingController extends Controller
{
    public function index()
    {
        $packaging = Packaging::all()->map(function ($item) {
            $item->type = 'packaging';
            return $item;
        });

        return view('admin.packaging', compact('packaging'));
    }
}
