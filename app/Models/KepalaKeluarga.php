<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaKeluarga extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_kk',
        'kepala_keluarga',
        'path_kk'
    ];
}
