<!-- resources/views/user/profile.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profil Saya</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama Lengkap: {{ $user->nama_lengkap }}</h5>
            <p class="card-text">NIK: {{ $user->nik_karyawan }}</p>
            <p class="card-text">Email: {{ $user->email }}</p>
            <!-- Tambahkan detail lain yang diinginkan -->
            <a href="{{ route('profile.edit') }}" class="btn btn-warning">Edit Profil</a>
        </div>
    </div>
</div>
@endsection
