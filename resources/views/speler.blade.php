@extends('layout')

@section('content')
<h1>Speler: {{ $voetballer->naam }}</h1>

<ul class="list-group">
    <li class="list-group-item"><strong>Leeftijd:</strong> {{ $voetballer->leeftijd }}</li>
    <li class="list-group-item"><strong>Positie:</strong> {{ $voetballer->positie }}</li>
    <li class="list-group-item"><strong>Club:</strong> {{ $voetballer->club->naam ?? 'Onbekend' }}</li>
</ul>

<a href="{{ route('voetballers.index') }}" class="btn btn-secondary mt-3">Terug naar overzicht</a>
@endsection
