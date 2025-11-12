@extends('layout')

@section('content')
<div class="row">
    <!-- Voetballers -->
    <div class="col-md-6 mb-3">
        <a href="{{ route('voetballers.index') }}" class="btn btn-light w-100 p-5 d-flex justify-content-center align-items-center flex-column index-card">
            <h2 class="text-dark mb-2">Voetballers</h2>
            <p class="text-muted">Bekijk alle spelers</p>
        </a>
    </div>

    <!-- Clubs -->
    <div class="col-md-6 mb-3">
        <a href="{{ route('clubs.index') }}" class="btn btn-light w-100 p-5 d-flex justify-content-center align-items-center flex-column index-card">
            <h2 class="text-dark mb-2">Clubs</h2>
            <p class="text-muted">Bekijk alle clubs</p>
        </a>
    </div>
</div>
@endsection

@section('styles')
<style>
.index-card {
    background-color: #f8f9fa; /* rustiger lichtgrijs */
    border: 1px solid #dee2e6; /* subtiele rand */
    transition: transform 0.2s, box-shadow 0.2s;
}

.index-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.index-card h2 {
    font-weight: 600;
    color: #343a40; /* donkergrijs ipv fel zwart */
}

.index-card p {
    font-size: 1rem;
}
</style>
@endsection
