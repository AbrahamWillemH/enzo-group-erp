<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use HasFactory;

    protected $table = 'packaging';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'user_name',
        'phone_number',
        'quantity',
        'deadline_date',
        'progress',
        'address',
        'finishing',
        'bridegroom_name',
        'model',
        'package_type',
        'size',
        'note_design',
        'payment_status',
        'price_per_pcs',
        'printout',
        'dp1_date',
        'dp2_date',
        'paid_off_date',
        'expedition',
        'acc_client',
        'design_status',
        'type',
        'note_cs',
        'status',
        'desain_path',
        'subprocess',
        'kemas',
        'source',
        'done_at',
        'fix_design_date',
        'time_zone',
        'design_deadline_date',
    ];

    public static function generatePackagingId()
    {
        $date = now()->format('Ymd'); // Tanggal dalam format angka saja (contoh: 20250122)

        // Ambil ID terakhir dari tiga tabel
        $lastId = collect(DB::select('
            SELECT id FROM invitation WHERE DATE(created_at) = :date1
            UNION
            SELECT id FROM souvenir WHERE DATE(created_at) = :date2
            UNION
            SELECT id FROM packaging WHERE DATE(created_at) = :date3
            ORDER BY id DESC
            LIMIT 1
        ', [
            'date1' => now()->toDateString(),
            'date2' => now()->toDateString(),
            'date3' => now()->toDateString(),
        ]))->first();

        if ($lastId) {
            // Ambil nomor urut terakhir dari ID
            $lastNumber = (int) substr($lastId->id, -3);
            $newId = $lastNumber + 1;
        } else {
            // Jika belum ada ID pada tanggal hari ini
            $newId = 1;
        }

        // Format nomor urut menjadi 3 digit
        $orderNumber = str_pad($newId, 3, '0', STR_PAD_LEFT);

        // Gabungkan tanggal dengan nomor urut
        return $date.$orderNumber;
    }

    /**
     * Relasi ke pengguna yang melakukan pemesanan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function spk()
    {
        return $this->hasOne(PackagingSPK::class);
    }
}
