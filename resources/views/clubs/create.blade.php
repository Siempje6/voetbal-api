@extends('layout')

@section('content')
<h1>Nieuwe Club Toevoegen</h1>

<form action="{{ route('clubs.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Naam</label>
        <input type="text" name="naam" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Stad</label>
        <input type="text" name="stad" class="form-control" required>
    </div>

    <button class="btn btn-success">Opslaan</button>
</form>
@endsection
