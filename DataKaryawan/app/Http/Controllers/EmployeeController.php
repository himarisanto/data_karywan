<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik_karyawan' => 'required|string|max:255',
            'nama_panggilan' => 'nullable|string|max:255',
            'jenis_kelamin' => 'required|in:male,female',
            'pkkwt' => 'nullable|string|max:255',
            'tanggal_kerja' => 'required|date',
            'tanggal_kontrak' => 'nullable|date',
            'tanggal_diangkat_tetap' => 'nullable|date',
            'masa_kerja' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nuptk' => 'nullable|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'usia' => 'required|integer',
            'agama' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'hobi' => 'nullable|string|max:255',
            'status_perkawinan' => 'required|string|max:255',
            'tanggal_pernikahan' => 'nullable|date',
            'nomor_surat_nikah' => 'nullable|string|max:255',
            'alamat_ktp' => 'required|string',
            'nomor_hp' => 'required|string|max:255',
            'kontak_darurat' => 'nullable|string|max:255',
            'gol_darah' => 'nullable|string|max:255',
            'no_ktp' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'instansi' => 'nullable|string|max:255',
            'tahun_lulus' => 'nullable|integer',
            'tempat_pelatihan' => 'nullable|string|max:255',
            'pengalaman_berorganisasi' => 'nullable|string|max:255',
            'nama_istri_suami' => 'nullable|string|max:255',
            'nama_anak' => 'nullable|string|max:255',
        ]);

        Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik_karyawan' => 'required|string|max:255',
            'nama_panggilan' => 'nullable|string|max:255',
            'jenis_kelamin' => 'required|in:male,female',
            'pkkwt' => 'nullable|string|max:255',
            'tanggal_kerja' => 'required|date',
            'tanggal_kontrak' => 'nullable|date',
            'tanggal_diangkat_tetap' => 'nullable|date',
            'masa_kerja' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nuptk' => 'nullable|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'usia' => 'required|integer',
            'agama' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'hobi' => 'nullable|string|max:255',
            'status_perkawinan' => 'required|string|max:255',
            'tanggal_pernikahan' => 'nullable|date',
            'nomor_surat_nikah' => 'nullable|string|max:255',
            'alamat_ktp' => 'required|string',
            'nomor_hp' => 'required|string|max:255',
            'kontak_darurat' => 'nullable|string|max:255',
            'gol_darah' => 'nullable|string|max:255',
            'no_ktp' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'instansi' => 'nullable|string|max:255',
            'tahun_lulus' => 'nullable|integer',
            'tempat_pelatihan' => 'nullable|string|max:255',
            'pengalaman_berorganisasi' => 'nullable|string|max:255',
            'nama_istri_suami' => 'nullable|string|max:255',
            'nama_anak' => 'nullable|string|max:255',
        ]);

        $employee->update($validatedData);

        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil diperbarui!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
