<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generate()
    {
        $data = ['title' => 'Laporan PDF', 'content' => 'Ini adalah laporan yang dicetak dalam PDF.'];

        $pdf = Pdf::loadView('admin.spk_packaging', $data);

        return $pdf->stream('laporan.pdf'); // Mengunduh file PDF
    }
}
