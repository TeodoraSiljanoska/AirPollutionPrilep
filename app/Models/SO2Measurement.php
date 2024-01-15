<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SO2Measurement extends Model
{
    use HasFactory;

    protected $table = 'so2_measurements';

    protected $fillable = [
        'date',
        'value'
    ];
}
