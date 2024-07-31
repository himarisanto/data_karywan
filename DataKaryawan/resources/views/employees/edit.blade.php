@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($employee) ? 'Edit' : 'Tambah' }} </h1>
    <form method="POST" action="{{ isset($employee) ? route('employees.update', $employee) : route('employees.store') }}">
        @csrf
        @if(isset($employee))
        @method('PUT')
        @endif

        <div class="form-group">
            <label for="full_name">Nama Lengkap</label>
            <input type="text" name="full_name" id="full_name" class="form-control" value="{{ old('full_name', $employee->full_name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="nik">NIK Karyawan</label>
            <input type="text" name="nik" id="nik" class="form-control" value="{{ old('nik', $employee->nik ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="nickname">Nama Panggilan</label>
            <input type="text" name="nickname" id="nickname" class="form-control" value="{{ old('nickname', $employee->nickname ?? '') }}">
        </div>

        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male" {{ old('gender', $employee->gender ?? '') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                <option value="female" {{ old('gender', $employee->gender ?? '') == 'female' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pkkwt">PKKWT Terakhir / SK Tetap</label>
            <input type="text" name="pkkwt" id="pkkwt" class="form-control" value="{{ old('pkkwt', $employee->pkkwt ?? '') }}">
        </div>

        <div class="form-group">
            <label for="work_start_date">Tanggal Kerja</label>
            <input type="date" name="work_start_date" id="work_start_date" class="form-control" value="{{ old('work_start_date', $employee->work_start_date ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="contract_date">Tanggal Kontrak</label>
            <input type="date" name="contract_date" id="contract_date" class="form-control" value="{{ old('contract_date', $employee->contract_date ?? '') }}">
        </div>

        <div class="form-group">
            <label for="permanent_date">Tanggal Diangkat Tetap</label>
            <input type="date" name="permanent_date" id="permanent_date" class="form-control" value="{{ old('permanent_date', $employee->permanent_date ?? '') }}">
        </div>

        <div class="form-group">
            <label for="work_duration">Masa Kerja</label>
            <input type="text" name="work_duration" id="work_duration" class="form-control" value="{{ old('work_duration', $employee->work_duration ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $employee->status ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $employee->position ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="nuptk">NUPTK</label>
            <input type="text" name="nuptk" id="nuptk" class="form-control" value="{{ old('nuptk', $employee->nuptk ?? '') }}">
        </div>

        <div class="form-group">
            <label for="place_of_birth">Tempat Lahir</label>
            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" value="{{ old('place_of_birth', $employee->place_of_birth ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="age">Usia</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $employee->age ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="religion">Agama</label>
            <input type="text" name="religion" id="religion" class="form-control" value="{{ old('religion', $employee->religion ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="hobby">Hobi</label>
            <input type="text" name="hobby" id="hobby" class="form-control" value="{{ old('hobby', $employee->hobby ?? '') }}">
        </div>

        <div class="form-group">
            <label for="marital_status">Status Perkawinan</label>
            <input type="text" name="marital_status" id="marital_status" class="form-control" value="{{ old('marital_status', $employee->marital_status ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="marriage_date">Tanggal Pernikahan</label>
            <input type="date" name="marriage_date" id="marriage_date" class="form-control" value="{{ old('marriage_date', $employee->marriage_date ?? '') }}">
        </div>

        <div class="form-group">
            <label for="marriage_certificate_number">Nomor Surat Nikah</label>
            <input type="text" name="marriage_certificate_number" id="marriage_certificate_number" class="form-control" value="{{ old('marriage_certificate_number', $employee->marriage_certificate_number ?? '') }}">
        </div>

        <div class="form-group">
            <label for="address_ktp">Alamat Lengkap KTP</label>
            <textarea name="address_ktp" id="address_ktp" class="form-control" required>{{ old('address_ktp', $employee->address_ktp ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="phone_number">Nomor HP</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number', $employee->phone_number ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="emergency_contact">Alamat & No. HP yang Mudah Dihubungi</label>
            <input type="text" name="emergency_contact" id="emergency_contact" class="form-control" value="{{ old('emergency_contact', $employee->emergency_contact ?? '') }}">
        </div>

        <div class="form-group">
            <label for="blood_type">Gol Darah</label>
            <input type="text" name="blood_type" id="blood_type" class="form-control" value="{{ old('blood_type', $employee->blood_type ?? '') }}">
        </div>

        <div class="form-group">
            <label for="ktp_number">No. KTP</label>
            <input type="text" name="ktp_number" id="ktp_number" class="form-control" value="{{ old('ktp_number', $employee->ktp_number ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="last_education">Pendidikan Terakhir</label>
            <input type="text" name="last_education" id="last_education" class="form-control" value="{{ old('last_education', $employee->last_education ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="institution">Instansi / Lembaga</label>
            <input type="text" name="institution" id="institution" class="form-control" value="{{ old('institution', $employee->institution ?? '') }}">
        </div>

        <div class="form-group">
            <label for="graduation_year">Tahun Lulus</label>
            <input type="number" name="graduation_year" id="graduation_year" class="form-control" value="{{ old('graduation_year', $employee->graduation_year ?? '') }}">
        </div>

        <div class="form-group">
            <label for="training_place">Tempat Pelatihan Kompetensi</label>
            <input type="text" name="training_place" id="training_place" class="form-control" value="{{ old('training_place', $employee->training_place ?? '') }}">
        </div>

        <div class="form-group">
            <label for="organization_experience">Pengalaman Berorganisasi</label>
            <input type="text" name="organization_experience" id="organization_experience" class="form-control" value="{{ old('organization_experience', $employee->organization_experience ?? '') }}">
        </div>

        <div class="form-group">
            <label for="spouse_name">Nama Istri / Suami</label>
            <input type="text" name="spouse_name" id="spouse_name" class="form-control" value="{{ old('spouse_name', $employee->spouse_name ?? '') }}">
        </div>

        <div class="form-group">
            <label for="children_names">Nama Anak</label>
            <input type="text" name="children_names" id="children_names" class="form-control" value="{{ old('children_names', $employee->children_names ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($employee) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection