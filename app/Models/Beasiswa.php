<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'semester',
        'ipk',
        'pilihan_beasiswa',
        'berkas',
        'status',
    ];

    protected $casts = [
    'ipk'=>'decimal:2',
    'semester'=>'integer',
    ];
}
