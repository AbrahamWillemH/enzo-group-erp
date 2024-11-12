<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use HasFactory;

    protected $table = 'packaging';

    protected $fillable = [
        'user_id',
        'product_name',
        'quantity',
        'deadline_date',
        'status',
        'progress',
    ];

    /**
     * Relasi ke pengguna yang melakukan pemesanan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // SCOPE STATUS
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
