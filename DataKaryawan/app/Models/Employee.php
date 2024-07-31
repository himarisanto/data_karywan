<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari nama model (opsional)
    protected $table = 'employees';

    // Menentukan kolom yang bisa diisi massal
    protected $fillable = [
        'nama_lengkap',
        'nik_karyawan',
        'nama_panggilan',
        'jenis_kelamin',
        'pkkwt',
        'tanggal_kerja',
        'tanggal_kontrak',
        'tanggal_diangkat_tetap',
        'masa_kerja',
        'status',
        'jabatan',
        'nuptk',
        'tempat_lahir',
        'usia',
        'agama',
        'email',
        'hobi',
        'status_perkawinan',
        'tanggal_pernikahan',
        'nomor_surat_nikah',
        'alamat_ktp',
        'nomor_hp',
        'kontak_darurat',
        'gol_darah',
        'no_ktp',
        'pendidikan_terakhir',
        'instansi',
        'tahun_lulus',
        'tempat_pelatihan',
        'pengalaman_berorganisasi',
        'nama_istri_suami',
        'nama_anak',
    ];

    // Menentukan kolom yang harus di-cast
    protected $casts = [
        'tanggal_kerja' => 'date',
        'tanggal_kontrak' => 'date',
        'tanggal_diangkat_tetap' => 'date',
        'tanggal_pernikahan' => 'date',
        'usia' => 'integer',
        'tahun_lulus' => 'integer',
    ];

    // Menentukan kolom yang harus diakses sebagai tanggal
    protected $dates = [
        'tanggal_kerja',
        'tanggal_kontrak',
        'tanggal_diangkat_tetap',
        'tanggal_pernikahan',
    ];

    // Jika Anda memiliki relasi dengan model lain, deklarasikan relasi di sini
}
