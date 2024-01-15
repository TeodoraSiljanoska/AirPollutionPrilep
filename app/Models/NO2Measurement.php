<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NO2Measurement extends Model
{
    use HasFactory;

    protected $table = 'no2_measurements';

    protected $fillable = [
        'date',
        'value'
    ];
}
