<!-- resources/views/manager/attendance/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Absensi Karyawan: {{ $employee->nama_lengkap }}</h1>
    <ul class="list-group">
        @foreach ($attendance as $record)
        <li class="list-group-item">
            {{ $record->date }} - {{ $record->status }}
        </li>
        @endforeach
    </ul>
</div>
@endsection
