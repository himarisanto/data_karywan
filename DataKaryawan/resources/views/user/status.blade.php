<!-- resources/views/user/status.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Status Kerja Saya</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Status Kerja: {{ $status }}</h5>
            <!-- Tambahkan detail lain jika perlu -->
        </div>
    </div>
</div>
@endsection
