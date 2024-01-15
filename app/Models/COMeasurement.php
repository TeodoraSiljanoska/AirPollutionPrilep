<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class COMeasurement extends Model
{
    use HasFactory;

    protected $table = 'co_measurements';

    protected $fillable = [
        'date',
        'value'
    ];

}
