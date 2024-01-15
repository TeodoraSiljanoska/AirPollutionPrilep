<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PM10Measurement extends Model
{
    use HasFactory;

    protected $table = 'pm10_measurements';

    protected $fillable = [
        'date',
        'value'
    ];
}
