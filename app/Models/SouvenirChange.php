<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SouvenirChange extends Model
{
    use HasFactory;

    protected $table = 'souvenir_changes';

    protected $fillable = [
        'souvenir_id',
        'column_name',
        'old_value',
        'new_value',
    ];

    public function souvenir()
    {
        return $this->belongsTo(Souvenir::class, 'souvenir_id', 'id');
    }
}
