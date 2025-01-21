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
}
