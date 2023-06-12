<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokBelajarSiswa extends Model
{
    use HasFactory;
    protected $table = 'kelompok_belajar_siswa';

    protected $fillable = [
        'id_kelompok',
        'nis',
    ];
    public $timestamps = false;

}
