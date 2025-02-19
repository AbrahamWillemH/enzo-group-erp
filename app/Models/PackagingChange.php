<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagingChange extends Model
{
    use HasFactory;

    protected $table = 'packaging_changes';

    protected $fillable = [
        'packaging_id',
        'column_name',
        'old_value',
        'new_value',
    ];

    public function packaging()
    {
        return $this->belongsTo(Packaging::class, 'packaging_id', 'id');
    }
}
