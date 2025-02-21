<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsvFile extends Model
{
    protected $table = 'csv_files';

    use HasFactory;
    protected $fillable = [
        'id',
        'path',
        'user_id',
        'status',
    ];
}
