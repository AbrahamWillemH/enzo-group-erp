<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $table = 'invitation';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'user_name',
        'address',
        'phone_number',
        'instagram',
        'product_name',
        'quantity',
        'type',
        'deadline_date',
        'finishing',
        'status',
        'progress',
        'bride_name',
        'bride_nickname',
        'bride_father',
        'bride_mother',
        'bride_parents_address',
        'groom_name',
        'groom_nickname',
        'groom_father',
        'groom_mother',
        'groom_parents_address',
        'akad_pemberkatan_date',
        'akad_pemberkatan_time',
        'akad_pemberkatan_location',
        'reception_date',
        'reception_time',
        'reception_location',
        'design_status',
        'note_cs',
        'note_design',
        'price_per_pcs',
        'expedition',
        'printout',
        'acc_client',
        'dp1_date',
        'dp2_date',
        'paid_off_date',
        'payment_status',
        'desain_path',
        'subprocess',
        'source',
        'done_at',
        'size_fix',
        'fix_design_date',
        'time_zone',
        'turut_mengundang',
        'akad_pemberkatan_time_done',
        'reception_time_done',
        'design_deadline_date',
        'finish_date',
    ];

    // Fungsi membuat ID otomatis YYYYMMDD-XX
    public static function generateInvitationId()
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
        return $this->hasOne(InvitationSPK::class);
    }
}
