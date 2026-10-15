<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tb_siswa';

    protected $primaryKey = 'nis';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nis',
        'nama',
        'rombel',
        'rayon',
        'no_telp',
        'alamat',
    ];
}