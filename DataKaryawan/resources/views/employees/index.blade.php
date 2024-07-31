@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Karyawan</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Karyawan</a>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

    <table class="table">
        <style>
            /* Custom CSS for table styling */
            .table {
                width: 100%;
                margin-top: 20px;
                border-collapse: collapse;
            }

            .table th,
            .table td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            .table th {
                background-color: #f2f2f2;
                font-weight: bold;
            }

            .table tr:hover {
                background-color: #f1f1f1;
            }

            .table td button,
            .table td a {
                margin-right: 5px;
            }

            .table .btn {
                padding: 5px 10px;
                font-size: 0.9em;
            }
        </style>
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>NIK Karyawan</th>
                <th>Nama Panggilan</th>
                <th>Jenis Kelamin</th>
                <th>PKKWT</th>
                <th>Tanggal Kerja</th>
                <th>Tanggal Kontrak</th>
                <th>Tanggal Diangkat Tetap</th>
                <th>Masa Kerja</th>
                <th>Status</th>
                <th>Jabatan</th>
                <th>NUPTK</th>
                <th>Tempat Lahir</th>
                <th>Usia</th>
                <th>Agama</th>
                <th>Email</th>
                <th>Hobi</th>
                <th>Status Perkawinan</th>
                <th>Tanggal Pernikahan</th>
                <th>Nomor Surat Nikah</th>
                <th>Alamat KTP</th>
                <th>Nomor HP</th>
                <th>Kontak Darurat</th>
                <th>Golongan Darah</th>
                <th>No. KTP</th>
                <th>Pendidikan Terakhir</th>
                <th>Instansi</th>
                <th>Tahun Lulus</th>
                <th>Tempat Pelatihan</th>
                <th>Pengalaman Berorganisasi</th>
                <th>Nama Istri/Suami</th>
                <th>Nama Anak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->nama_lengkap }}</td>
                <td>{{ $employee->nik_karyawan }}</td>
                <td>{{ $employee->nama_panggilan }}</td>
                <td>{{ $employee->jenis_kelamin }}</td>
                <td>{{ $employee->pkkwt }}</td>
                <td>{{ $employee->tanggal_kerja }}</td>
                <td>{{ $employee->tanggal_kontrak }}</td>
                <td>{{ $employee->tanggal_diangkat_tetap }}</td>
                <td>{{ $employee->masa_kerja }}</td>
                <td>{{ $employee->status }}</td>
                <td>{{ $employee->jabatan }}</td>
                <td>{{ $employee->nuptk }}</td>
                <td>{{ $employee->tempat_lahir }}</td>
                <td>{{ $employee->usia }}</td>
                <td>{{ $employee->agama }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->hobi }}</td>
                <td>{{ $employee->status_perkawinan }}</td>
                <td>{{ $employee->tanggal_pernikahan }}</td>
                <td>{{ $employee->nomor_surat_nikah }}</td>
                <td>{{ $employee->alamat_ktp }}</td>
                <td>{{ $employee->nomor_hp }}</td>
                <td>{{ $employee->kontak_darurat }}</td>
                <td>{{ $employee->gol_darah }}</td>
                <td>{{ $employee->no_ktp }}</td>
                <td>{{ $employee->pendidikan_terakhir }}</td>
                <td>{{ $employee->instansi }}</td>
                <td>{{ $employee->tahun_lulus }}</td>
                <td>{{ $employee->tempat_pelatihan }}</td>
                <td>{{ $employee->pengalaman_berorganisasi }}</td>
                <td>{{ $employee->nama_istri_suami }}</td>
                <td>{{ $employee->nama_anak }}</td>
                <td>
                    <a href="{{ route('employees.show', $employee) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection