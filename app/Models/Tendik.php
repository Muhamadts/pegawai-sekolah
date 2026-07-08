<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tendik extends Model
{
    protected $fillable = [
        'niy',
        'nik_ktp',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status',
        'pendidikan',
        'jabatan',
        'mulai_bekerja',
        'alamat',
    ];
}