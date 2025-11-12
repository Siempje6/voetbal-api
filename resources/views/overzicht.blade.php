@extends('layout')

@section('content')
<h1 class="mb-4">Overzicht van Voetballers</h1>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Naam</th>
            <th>Leeftijd</th>
            <th>Positie</th>
            <th>Club</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach($voetballers as $voetballer)
        <tr>
            <td>{{ $voetballer->naam }}</td>
            <td>{{ $voetballer->leeftijd }}</td>
            <td>{{ $voetballer->positie }}</td>
            <td>
                @if($voetballer->clubs->count())
                @foreach($voetballer->clubs as $club)
                <a href="{{ route('clubs.show', $club->id) }}">{{ $club->naam }}</a>@if(!$loop->last), @endif
                @endforeach
                @else
                Onbekend
                @endif
            </td>


            <td>
                <a href="{{ route('voetballers.show', $voetballer->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                <a href="{{ route('voetballers.edit', $voetballer->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                <form action="{{ route('voetballers.destroy', $voetballer->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Weet je zeker dat je deze speler wilt verwijderen?')">Verwijderen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection