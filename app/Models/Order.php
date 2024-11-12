<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'product_name',
        'quantity',
        'deadline_date',
        'status',
        'progress',
    ];

    // Daftar status pesanan yang valid
    const STATUS_WAITING = 'Menunggu Konfirmasi';
    const STATUS_CONFIRMED = 'Dikonfirmasi';
    const STATUS_DECLINED = 'Ditolak';

    /**
     * Relasi ke pengguna yang melakukan pemesanan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope untuk pesanan yang menunggu konfirmasi.
     */
    public function scopeWaitingConfirmation($query)
    {
        return $query->where('status', self::STATUS_WAITING);
    }

    /**
     * Scope untuk pesanan yang telah dikonfirmasi.
     */
    public function scopeConfirmed($query)
    {
        return $query->where('status', self::STATUS_CONFIRMED);
    }

    /**
     * Scope untuk pesanan yang telah ditolak.
     */
    public function scopeDeclined($query)
    {
        return $query->where('status', self::STATUS_DECLINED);
    }

    /**
     * Metode untuk memperbarui status pesanan ke status yang diinginkan.
     */
    public function updateStatus($status)
    {
        $this->status = $status;
        $this->save();
    }
}
