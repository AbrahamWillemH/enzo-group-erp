<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllOrder extends Model
{
    const STATUS_WAITING = 'Menunggu Konfirmasi';

    const STATUS_CONFIRMED = 'Dikonfirmasi';

    const STATUS_DECLINED = 'Ditolak';

    const PROGRESS_1 = 'Pemesanan Bahan';

    const PROGRESS_2 = 'Proses Produksi';

    const PROGRESS_3 = 'Finishing';

    const PROGRESS_4 = 'Selesai';
}
