<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    use HasFactory;
    protected $table = 'latihans'; // Gantikan nama_tabel dengan nama tabel yang sesuai

    protected $fillable = ['nama', 'nim', 'prodi'];
}
