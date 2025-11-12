@extends('layout')

@section('content')
<h1 class="mb-4">Clubs</h1>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Naam</th>
            <th>Stad</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clubs as $club)
        <tr>
            <td>{{ $club->naam }}</td>
            <td>{{ $club->stad }}</td>
            <td>
                <a href="{{ route('clubs.show', $club->id) }}" class="btn btn-sm btn-primary">Bekijk</a>
                <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-sm btn-warning">Bewerk</a>
                <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Weet je het zeker?')">Verwijder</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
