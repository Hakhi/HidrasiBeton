<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;
    protected $guarded = [
        'id', 'created_at,update_at', 'suhu_10_cm', 'suhu_15_cm', 'panjang'
    ];
}
