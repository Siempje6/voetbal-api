<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoetballerController;



Route::get('/', function () {
    return view('index');  
})->name('home');

Route::get('/voetballers', [VoetballerController::class, 'index'])->name('voetballers.index');
Route::get('/voetballers/create', [VoetballerController::class, 'create'])->name('voetballers.create');
Route::post('/voetballers', [VoetballerController::class, 'store'])->name('voetballers.store');
Route::get('/voetballers/{id}', [VoetballerController::class, 'show'])->name('voetballers.show');
Route::get('/voetballers/{id}/edit', [VoetballerController::class, 'edit'])->name('voetballers.edit');
Route::put('/voetballers/{id}', [VoetballerController::class, 'update'])->name('voetballers.update');
Route::delete('/voetballers/{id}', [VoetballerController::class, 'destroy'])->name('voetballers.destroy');

use App\Http\Controllers\ClubController;

Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');
Route::get('/clubs/{club}', [ClubController::class, 'show'])->name('clubs.show');
Route::get('/clubs/{club}/edit', [ClubController::class, 'edit'])->name('clubs.edit');
Route::put('/clubs/{club}', [ClubController::class, 'update'])->name('clubs.update');
Route::delete('/clubs/{club}', [ClubController::class, 'destroy'])->name('clubs.destroy');

