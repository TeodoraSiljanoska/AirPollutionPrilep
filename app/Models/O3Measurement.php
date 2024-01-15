<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class O3Measurement extends Model
{
    use HasFactory;
    
    protected $table = 'o3_measurements';

    protected $fillable = [
        'date',
        'value'
    ];
}
