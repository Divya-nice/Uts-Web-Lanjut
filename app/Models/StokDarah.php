<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokDarah extends Model
{
    protected $fillable = [
        'golongan_darah',
        'stok'
    ];
}