<?php

namespace App\Models;

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
    ];


    /**
     * Relasi ke pengguna yang melakukan pemesanan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // SCOPE STATUS PESANAN
    public function scopeWaitingConfirmation($query)
    {
        return $query->where('status', AllOrder::STATUS_WAITING);
    }
    public function scopeConfirmed($query)
    {
        return $query->where('status', AllOrder::STATUS_CONFIRMED);
    }
    public function scopeDeclined($query)
    {
        return $query->where('status', AllOrder::STATUS_DECLINED);
    }


    // SCOPE PROGRESS PEMBUATAN BARANG
    public function scopeProgress_1($query)
    {
        return $query->where('status', AllOrder::PROGRESS_1);
    }
    public function scopeProgress_2($query)
    {
        return $query->where('status', AllOrder::PROGRESS_2);
    }
    public function scopeProgress_3($query)
    {
        return $query->where('status', AllOrder::PROGRESS_3);
    }
    public function scopeProgress_4($query)
    {
        return $query->where('status', AllOrder::PROGRESS_4);
    }

    /**
     * Metode untuk memperbarui status pesanan ke status yang diinginkan.
     */
    public function updateStatus($status)
    {
        $this->status = $status;
        $this->save();
    }
    public function updateProgress($progress)
    {
        $this->progress = $progress;
        $this->save();
    }
}
