<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predict extends Model
{
    protected $fillable = [
        'rentang', 'mutu_beton', 'bentuk_sampel', 'file_csv'
    ];
}
