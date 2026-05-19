<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'pendonor_id',
        'tanggal_donor',
        'jumlah'
    ];

    public function pendonor()
    {
        return $this->belongsTo(Pendonor::class, 'pendonor_id');
    }
}
