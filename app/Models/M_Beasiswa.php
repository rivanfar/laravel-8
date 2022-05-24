<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Dosen extends Model
{
    use SoftDeletes;

    protected $table = 'data_dosen';
    protected $fillable = [
        'NIDN',
        'Nama Dosen',
        'Jenis_Kelamin',
        'Pendidikan',
        'Prodi',
    ];

    protected $hidden;
}