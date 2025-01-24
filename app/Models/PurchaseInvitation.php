<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseInvitation extends Model
{
    use HasFactory;

    protected $table = 'purchase_invitation';
    protected $primaryKey = 'order_code';
    public $timestamps = false;
    protected $keyType = 'string';



    protected $fillable = [
        'order_code',
        'invoice',
        'date',
        'supplier',
        'address',
        'phone_number',
        'email',
        'product',
        'size_type',
        'quantity_per_type',
        'termin',
        'total',
        'unit',
        'pic',
        'note',
        'status',
        'send',
        'bought',
        'paid',
        'invitation_id',
    ];
}
