<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataInduk extends Model
{
    protected $fillable = [
        'jenis',
        'pegawai_id',
    ];
}