<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderFinal extends Model
{
    use HasFactory;

    protected $table = 'orders_final';
    protected $fillable = ['user_id', 'product_name', 'quantity', 'deadline_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
