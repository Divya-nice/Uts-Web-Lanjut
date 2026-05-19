<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    protected $fillable = [
        'nama',
        'nik',
        'jenis_kelamin',
        'golongan_darah',
        'alamat',
        'telepon'
    ];

    public function donors()
    {
        return $this->hasMany(Donor::class);
    }
}
