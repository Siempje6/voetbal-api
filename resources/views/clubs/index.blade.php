@extends('layout')

@section('content')
<h1 class="mb-4">Clubs Overzicht</h1>

<a href="{{ route('clubs.create') }}" class="btn btn-primary mb-3">Club toevoegen</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Naam</th>
            <th>Stad</th>
            <th>Aantal spelers</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clubs as $club)
        <tr>
            <td>{{ $club->naam }}</td>
            <td>{{ $club->stad }}</td>
            <td>{{ $club->voetballers_count }}</td>
            <td>
                <a href="{{ route('clubs.show', $club->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Club verwijderen?')">Verwijderen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
