<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConfirmation extends Model
{
    use HasFactory;

    protected $table = 'orders_confirmation';
    protected $fillable = ['user_id', 'product_name', 'quantity', 'deadline_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
