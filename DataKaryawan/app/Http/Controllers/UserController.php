<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('profil')->get();
        return view('autentikasi.user.index', compact('users'));
    }
    public function showEditProfileForm()
    {
        $profile = Profil::first(); // Fetch a single profile; adjust if needed
        return view('autentikasi.user.edit_profile', compact('profile'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'foto_profil'   => 'file|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|nullable',
            'nama_lengkap'  => 'required|string',
            'jabatan'       => 'required|string',
            'status_kerja'  => 'required|numeric',
            'tentang'       => 'string|nullable'
        ]);

        $profilUser = Profil::first();

        if ($profilUser) {
            $photoProfil = $profilUser->foto_profil;

            if ($request->hasFile('foto_profil')) {
                $fotoProfil = $request->file('foto_profil');
                $name = time() . '_' . $fotoProfil->getClientOriginalName();
                $destinationPath = public_path('/profil_user');

                if ($fotoProfil->move($destinationPath, $name)) {
                    if ($photoProfil && File::exists(public_path('profil_user/' . $photoProfil))) {
                        File::delete(public_path('profil_user/' . $photoProfil));
                    }
                    $photoProfil = $name;
                }
            }

            $profilUser->update([
                'foto_profil'   => $photoProfil,
                'nama_lengkap'  => $request->input('nama_lengkap'),
                'jabatan'       => $request->input('jabatan'),
                'status_kerja'  => $request->input('status_kerja'),
                'tentang'       => $request->input('tentang')
            ]);

            return redirect()->back()->with('message', 'Data profil user berhasil diperbarui.');
        } else {
            $fotoUser = null;
            if ($request->hasFile('foto_profil')) {
                $fotoProfil = $request->file('foto_profil');
                $name = time() . '_' . $fotoProfil->getClientOriginalName();
                $destinationPath = public_path('/profil_user');

                if ($fotoProfil->move($destinationPath, $name)) {
                    $fotoUser = $name;
                }
            }

            Profil::create([
                'foto_profil'   => $fotoUser,
                'nama_lengkap'  => $request->input('nama_lengkap'),
                'jabatan'       => $request->input('jabatan'),
                'status_kerja'  => $request->input('status_kerja'),
                'tentang'       => $request->input('tentang')
            ]);

            return redirect()->back()->with('message', 'Data profil user berhasil disimpan.');
        }
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'username'  => 'string',
            'email'     => 'email|string',
        ]);

        $user = User::first();

        if ($user) {
            $user->update($request->all());
            return back()->with('message', 'Data user berhasil diperbarui');
        } else {
            return back()->with('error', 'User tidak ditemukan');
        }
    }

    public function gantiPassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newpassword'     => 'required|min:8',
            'confirmpassword' => 'required|same:newpassword',
        ]);

        $current_user = auth()->user();

        if (Hash::check($request->input('currentPassword'), $current_user->password)) {
            $current_user->password = Hash::make($request->input('newpassword'));
            $current_user->save();

            return redirect()->back()->with('message', 'Password berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Password lama salah');
        }
    }
}
