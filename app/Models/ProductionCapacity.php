<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionCapacity extends Model
{
    use HasFactory;

    protected $table = 'production_capacity';

    protected $primaryKey = 'id';

    protected $fillable = [
      'nama_produk',
      'jenis',
      'jahit',
      'kemas_plastik',
      'kemas_box',
      'kemas_mika',
      'kemas_besek',
      'kemas_krongso'
    ];
}
