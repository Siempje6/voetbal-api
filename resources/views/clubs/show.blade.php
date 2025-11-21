@extends('layout')

@section('content')
<h1>{{ $club->naam }} ({{ $club->stad }})</h1>

<h3>Spelers in deze club:</h3>

<ul class="list-group mb-4">
    @forelse($club->voetballers as $speler)
        <li class="list-group-item d-flex justify-content-between">
            {{ $speler->naam }}
            <a class="btn btn-sm btn-outline-primary" href="{{ route('voetballers.show', $speler->id) }}">Bekijk</a>
        </li>
    @empty
        <li class="list-group-item">Geen spelers in deze club.</li>
    @endforelse
</ul>

<a href="{{ route('clubs.index') }}" class="btn btn-secondary">Terug naar overzicht</a>
@endsection
