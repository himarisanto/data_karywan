<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware untuk autentikasi
        $this->middleware('manager'); // Middleware untuk role manager
    }

    public function dataKaryawan()
    {
        return view('manager.data-karyawan');
    }

    public function catatanKaryawan()
    {
        return view('manager.catatan-karyawan');
    }

    public function followUpHRD()
    {
        return view('manager.follow-up-hrd');
    }

    public function absensiKaryawan()
    {
        return view('manager.absensi-karyawan');
    }

    public function golongan()
    {
        return view('manager.golongan');
    }
}
