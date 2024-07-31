@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Karyawan</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="nik_karyawan">NIK Karyawan</label>
            <input type="text" class="form-control" id="nik_karyawan" name="nik_karyawan" required>
        </div>
        <div class="form-group">
            <label for="nama_panggilan">Nama Panggilan</label>
            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pkkwt">PKKWT</label>
            <input type="text" class="form-control" id="pkkwt" name="pkkwt">
        </div>
        <div class="form-group">
            <label for="tanggal_kerja">Tanggal Kerja</label>
            <input type="date" class="form-control" id="tanggal_kerja" name="tanggal_kerja" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kontrak">Tanggal Kontrak</label>
            <input type="date" class="form-control" id="tanggal_kontrak" name="tanggal_kontrak">
        </div>
        <div class="form-group">
            <label for="tanggal_diangkat_tetap">Tanggal Diangkat Tetap</label>
            <input type="date" class="form-control" id="tanggal_diangkat_tetap" name="tanggal_diangkat_tetap">
        </div>
        <div class="form-group">
            <label for="masa_kerja">Masa Kerja</label>
            <select class="form-control" id="masa_kerja" name="masa_kerja" required>
            <option value=""></option>
                <option value="magang">Magang</option>
                <option value="kontrak">Kontrak</option>
                <option value="tetap">Tetap</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>
        <div class="form-group">
            <label for="nuptk">NUPTK</label>
            <input type="text" class="form-control" id="nuptk" name="nuptk">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        <div class="form-group">
            <label for="usia">Usia</label>
            <input type="number" class="form-control" id="usia" name="usia" required>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="hobi">Hobi</label>
            <input type="text" class="form-control" id="hobi" name="hobi">
        </div>
        <div class="form-group">
            <label for="status_perkawinan">Status Perkawinan</label>
            <input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" required>
        </div>
        <div class="form-group">
            <label for="tanggal_pernikahan">Tanggal Pernikahan</label>
            <input type="date" class="form-control" id="tanggal_pernikahan" name="tanggal_pernikahan">
        </div>
        <div class="form-group">
            <label for="nomor_surat_nikah">Nomor Surat Nikah</label>
            <input type="text" class="form-control" id="nomor_surat_nikah" name="nomor_surat_nikah">
        </div>
        <div class="form-group">
            <label for="alamat_ktp">Alamat KTP</label>
            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" required></textarea>
        </div>
        <div class="form-group">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
        </div>
        <div class="form-group">
            <label for="kontak_darurat">Kontak Darurat</label>
            <input type="text" class="form-control" id="kontak_darurat" name="kontak_darurat">
        </div>
        <div class="form-group">
            <label for="gol_darah">Golongan Darah</label>
            <input type="text" class="form-control" id="gol_darah" name="gol_darah">
        </div>
        <div class="form-group">
            <label for="no_ktp">No. KTP</label>
            <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
        </div>
        <div class="form-group">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
        </div>
        <div class="form-group">
            <label for="instansi">Instansi</label>
            <input type="text" class="form-control" id="instansi" name="instansi">
        </div>
        <div class="form-group">
            <label for="tahun_lulus">Tahun Lulus</label>
            <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus">
        </div>
        <div class="form-group">
            <label for="tempat_pelatihan">Tempat Pelatihan</label>
            <input type="text" class="form-control" id="tempat_pelatihan" name="tempat_pelatihan">
        </div>
        <div class="form-group">
            <label for="pengalaman_berorganisasi">Pengalaman Berorganisasi</label>
            <textarea class="form-control" id="pengalaman_berorganisasi" name="pengalaman_berorganisasi"></textarea>
        </div>
        <div class="form-group">
            <label for="nama_istri_suami">Nama Istri/Suami</label>
            <input type="text" class="form-control" id="nama_istri_suami" name="nama_istri_suami">
        </div>
        <div class="form-group">
            <label for="nama_anak">Nama Anak</label>
            <textarea class="form-control" id="nama_anak" name="nama_anak"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection