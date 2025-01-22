<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souvenir extends Model
{
    use HasFactory;

    protected $table = 'souvenir';

    protected $fillable = [
        'user_id',
        'user_name',
        'product_name',
        'quantity',
        'deadline_date',
        'status',
        'progress',
        'address',
        'phone_number',
        'event_date',
        'bridegroom_name',
        'pack',
        'design',
        'thankscard',
        'color_motif',
        'motif_backup',
        'dp1_date',
        'dp2_date',
        'paid_off_date',
        'type',
        'design_status',
        'note_cs',
        'note_design',
        'price_per_pcs',
        'expedition',
        'printout',
        'acc_client'
    ];

    /**
     * Relasi ke pengguna yang melakukan pemesanan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function generateSouvenirId()
    {
        $date = now()->format('Ymd'); // Tanggal dalam format angka saja (contoh: 20250122)

        // Ambil ID terakhir dari tiga tabel
        $lastId = collect(DB::select("
            SELECT id FROM invitation WHERE DATE(created_at) = :date1
            UNION
            SELECT id FROM souvenir WHERE DATE(created_at) = :date2
            UNION
            SELECT id FROM packaging WHERE DATE(created_at) = :date3
            ORDER BY id DESC
            LIMIT 1
        ", [
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
        return $date . $orderNumber;
    }

}
