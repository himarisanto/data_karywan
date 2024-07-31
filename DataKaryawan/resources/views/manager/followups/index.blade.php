@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Follow Up HRD</h1>
    <ul class="list-group">
        @foreach ($followUps as $followUp)
        <li class="list-group-item">
            {{ $followUp->description }} <br>
            <small class="text-muted">Tanggal: {{ $followUp->created_at }}</small>
        </li>
        @endforeach
    </ul>
</div>
@endsection

