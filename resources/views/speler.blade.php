@extends('layout')

@section('content')
<h1>Speler: {{ $voetballer->naam }}</h1>

<ul class="list-group">
    <li class="list-group-item"><strong>Leeftijd:</strong> {{ $voetballer->leeftijd }}</li>
    <li class="list-group-item"><strong>Positie:</strong> {{ $voetballer->positie }}</li>
    <li class="list-group-item"><strong>Club:</strong>
        @if($voetballer->clubs->count())
        @foreach($voetballer->clubs as $club)
        <a href="{{ route('clubs.show', $club->id) }}">{{ $club->naam }}</a>@if(!$loop->last), @endif
        @endforeach
        @else
        Onbekend
        @endif
    </li>
</ul>

<a href="{{ route('voetballers.index') }}" class="btn btn-secondary mt-3">Terug naar overzicht</a>
@endsection