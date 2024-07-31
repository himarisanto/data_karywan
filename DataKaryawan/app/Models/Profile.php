<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto_profil',
        'nama_lengkap',
        'jabatan',
        'status_kerja',
        'tentang'
    ];

    protected $primaryKey = 'id';
}
