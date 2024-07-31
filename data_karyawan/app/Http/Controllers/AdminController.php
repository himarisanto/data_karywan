<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware untuk autentikasi
        $this->middleware('admin'); // Middleware untuk role admin
    }

    public function imporAbsensi()
    {
        return view('admin.impor-absensi');
    }

    public function inputDataKaryawan()
    {
        return view('admin.input-data-karyawan');
    }
}
