<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokBelajar extends Model
{
    protected $table = 'kelompok_belajar';

    protected $fillable = ['nama_kelompok', 'id_kelas'];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'kelompok_belajar_siswa', 'id', 'nis_siswa');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
