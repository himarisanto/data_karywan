<!-- resources/views/user/attendance.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Absensi Saya</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Status</th>
                <!-- Tambahkan kolom lain jika perlu -->
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->tanggal }}</td>
                <td>{{ $attendance->status }}</td>
                <!-- Tambahkan data lain jika perlu -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
