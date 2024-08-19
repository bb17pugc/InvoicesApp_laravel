<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'balance',
        'user_id',
        'updated_at',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
