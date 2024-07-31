<!-- resources/views/manager/notes/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Catatan Karyawan: {{ $employee->nama_lengkap }}</h1>
    <ul class="list-group">
        @foreach ($notes as $note)
        <li class="list-group-item">
            {{ $note->content }} <br>
            <small class="text-muted">Tanggal: {{ $note->created_at }}</small>
        </li>
        @endforeach
    </ul>
</div>
@endsection
