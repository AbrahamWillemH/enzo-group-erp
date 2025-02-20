<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\InvitationSPK;
use App\Models\Packaging;
use App\Models\PackagingSPK;
use App\Models\Souvenir;
use App\Models\SouvenirSPK;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generate($type, $id, $parent_id)
    {
        $model = null;
        $parent = null;
        $view = '';
        $file_name = '';

        if ($type === 'invitation') {
            $model = InvitationSPK::find($id);
            $parent = Invitation::find($parent_id);
            $view = 'admin.spk_invitation';
            $file_name = 'SPK - Invitation - ' . $parent_id;
        } elseif ($type === 'souvenir') {
            $model = SouvenirSPK::find($id);
            $parent = Souvenir::find($parent_id);
            $view = 'admin.spk_souvenir';
            $file_name = 'SPK - Souvenir - ' . $parent_id;
        } elseif ($type === 'packaging') {
            $model = PackagingSPK::find($id);
            $parent = Packaging::find($parent_id);
            $view = 'admin.spk_packaging';
            $file_name = 'SPK - Packaging - ' . $parent_id;
        } else {
            return redirect()->back()->with('error', 'Tipe data tidak valid.');
        }

        if (!$model || !$parent) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        if ($model instanceof InvitationSPK) {
            $model->peruntukan = json_decode($model->peruntukan, true);
            $model->nama_ukuran = json_decode($model->nama_ukuran, true);
            $model->kebutuhan = json_decode($model->kebutuhan, true);
            $model->stok = json_decode($model->stok, true);
            $model->jumlah_beli = json_decode($model->jumlah_beli, true);
            $model->supplier = json_decode($model->supplier, true);
        } elseif ($model instanceof SouvenirSPK) {
            $model->nama_bahan = json_decode($model->nama_bahan, true);
            $model->kebutuhan = json_decode($model->kebutuhan, true);
            $model->stok = json_decode($model->stok, true);
            $model->jumlah_beli = json_decode($model->jumlah_beli, true);
            $model->supplier = json_decode($model->supplier, true);
        } elseif ($model instanceof PackagingSPK) {
            $model->nama_bahan = json_decode($model->nama_bahan, true);
            $model->ukuran = json_decode($model->ukuran, true);
            $model->kebutuhan = json_decode($model->kebutuhan, true);
            $model->stok = json_decode($model->stok, true);
            $model->jumlah_beli = json_decode($model->jumlah_beli, true);
            $model->supplier = json_decode($model->supplier, true);
        }

        $data = [
            'details' => $model,
            'parent' => $parent
        ];

        $pdf = Pdf::loadView($view, $data);

        return $pdf->stream($file_name . '.pdf');
    }
}
