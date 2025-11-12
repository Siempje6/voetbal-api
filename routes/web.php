<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoetballerController;
use App\Http\Controllers\ClubController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Hier worden de webroutes voor je applicatie geregistreerd.
|
*/

// Startpagina: index met 2 kolommen
Route::get('/', function () {
    return view('index');  // index.blade.php met knoppen naar Voetballers en Clubs
})->name('home');

// Routes voor Voetballers
Route::get('/voetballers', [VoetballerController::class, 'index'])->name('voetballers.index');
Route::get('/voetballers/create', [VoetballerController::class, 'create'])->name('voetballers.create');
Route::post('/voetballers', [VoetballerController::class, 'store'])->name('voetballers.store');
Route::get('/voetballers/{id}', [VoetballerController::class, 'show'])->name('voetballers.show');
Route::get('/voetballers/{id}/edit', [VoetballerController::class, 'edit'])->name('voetballers.edit');
Route::put('/voetballers/{id}', [VoetballerController::class, 'update'])->name('voetballers.update');
Route::delete('/voetballers/{id}', [VoetballerController::class, 'destroy'])->name('voetballers.destroy');

// Routes voor Clubs
Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');
Route::get('/clubs/{id}', [ClubController::class, 'show'])->name('clubs.show');
Route::get('/clubs/{id}/edit', [ClubController::class, 'edit'])->name('clubs.edit');
Route::put('/clubs/{id}', [ClubController::class, 'update'])->name('clubs.update');
Route::delete('/clubs/{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');
