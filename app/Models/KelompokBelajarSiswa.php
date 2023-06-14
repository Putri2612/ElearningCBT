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

    // Relasi Ke Guru
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis_siswa');
    }
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }

    public function kelompokBelajar()
    {
        return $this->belongsTo(KelompokBelajar::class);
    }

    public $timestamps = false;

}
