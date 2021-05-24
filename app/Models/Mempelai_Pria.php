<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mempelai_Pria extends Model
{
    use HasFactory;
    public $table = 'mempelai_pria';

    protected $fillable = [
       'nama_lengkap',
       'nama_panggila',
       'foto',
       'nama_ayah',
       'nama_ibu',
       'alamat',
       'akun_instagram',
    ];
}
