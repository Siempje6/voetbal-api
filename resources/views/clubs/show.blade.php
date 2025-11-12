@extends('layout')

@section('content')
<h1 class="mb-4">{{ $club->naam }} ({{ $club->stad }})</h1>

<h3>Spelers</h3>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Naam</th>
            <th>Leeftijd</th>
            <th>Positie</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach($club->voetballers as $voetballer)
        <tr>
            <td>{{ $voetballer->naam }}</td>
            <td>{{ $voetballer->leeftijd }}</td>
            <td>{{ $voetballer->positie }}</td>
            <td>
                <a href="{{ route('voetballers.show', $voetballer->id) }}" class="btn btn-sm btn-primary">Bekijk</a>
                <a href="{{ route('voetballers.edit', $voetballer->id) }}" class="btn btn-sm btn-warning">Bewerk</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
