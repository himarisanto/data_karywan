<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware untuk autentikasi
        $this->middleware('user'); // Middleware untuk role user
    }

    public function profilSaya()
    {
        return view('user.profil-saya');
    }

    public function absensiSaya()
    {
        return view('user.absensi-saya');
    }

    public function editProfil()
    {
        return view('user.edit-profil');
    }

    public function statusKerja()
    {
        return view('user.status-kerja');
    }
}

