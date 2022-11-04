<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = "penduduk";
    protected $primaryKey = "id";
    protected $fillable = [
         'nik', 'nama', 'jenis_kelamin', 'alamat', 'pekerjaan', 'tempat_lahir', 'warga', 'perkawinan', 'tgl_lahir', 'gol_darah'
    ];
}
