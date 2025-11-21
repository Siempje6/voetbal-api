@extends('layout')

@section('content')
<h1>Club Bewerken</h1>

<form action="{{ route('clubs.update', $club->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Naam</label>
        <input type="text" name="naam" class="form-control" value="{{ $club->naam }}" required>
    </div>

    <div class="mb-3">
        <label>Stad</label>
        <input type="text" name="stad" class="form-control" value="{{ $club->stad }}" required>
    </div>

    <button class="btn btn-success">Updaten</button>
</form>
@endsection
