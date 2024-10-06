<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'no_kk',
        'status',
        'no_telepon',
        'jenis_kelamin',
        'path_kk',
        'path_akte',
        'path_pp',
        'path_ktp',


    ];
}
