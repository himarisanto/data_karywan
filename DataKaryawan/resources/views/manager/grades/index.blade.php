<!-- resources/views/manager/grades/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Golongan Karyawan</h1>
    <ul class="list-group">
        @foreach ($grades as $grade)
        <li class="list-group-item">
            {{ $grade->name }} - {{ $grade->description }}
        </li>
        @endforeach
    </ul>
</div>
@endsection

