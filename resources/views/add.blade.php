@extends('layout')

@section('content')
<h1>Nieuwe Speler Toevoegen</h1>

<form method="POST" action="{{ route('voetballers.store') }}">
    @csrf

    <div class="mb-3">
        <label for="naam" class="form-label">Naam</label>
        <input type="text" class="form-control" id="naam" name="naam" required>
    </div>

    <div class="mb-3">
        <label for="leeftijd" class="form-label">Leeftijd</label>
        <input type="number" class="form-control" id="leeftijd" name="leeftijd" required>
    </div>

    <div class="mb-3">
        <label for="positie" class="form-label">Positie</label>
        <input type="text" class="form-control" id="positie" name="positie" required>
    </div>

    <div class="mb-3">
        <label for="club_id" class="form-label">Club</label>
        <select class="form-control" id="club_id" name="club_id">
            @foreach($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->naam }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Opslaan</button>
    <a href="{{ route('voetballers.index') }}" class="btn btn-secondary">Annuleren</a>
</form>
@endsection
