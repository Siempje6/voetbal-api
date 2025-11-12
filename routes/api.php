<?php

use App\Http\Controllers\Api\VoetballerController;
use App\Http\Controllers\Api\ClubController;

Route::apiResource('voetballers', VoetballerController::class);
Route::apiResource('clubs', ClubController::class);

