<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitationChange extends Model
{
    use HasFactory;

    protected $table = 'invitation_changes';

    protected $fillable = [
        'invitation_id',
        'column_name',
        'old_value',
        'new_value',
        'changer_name',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id', 'id');
    }
}
