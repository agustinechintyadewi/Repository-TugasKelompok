<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hewan extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama_hewan',
        'kode_hewan',
        'jenis_hewan',
        'umur_hewan',
        'deskripsi',
        'syarat',
        'foto'
    ];
}
