<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';

    use HasFactory;
    protected $fillable = [
        'user_id',
        'total_payment',
        'rate_per_row',
        'total_records',
        'csv_files_id',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function file()
    {
        return $this->belongsTo('App\Models\CsvFile','csv_files_id');
    }

}
