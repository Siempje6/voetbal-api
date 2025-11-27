<?php

use App\Http\Controllers\Api\VoetballerController;
use App\Http\Controllers\Api\ClubController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\VoetbalController;

Route::middleware('auth:sanctum')->get('/clubs', [VoetbalController::class, 'getClubs']);
Route::middleware('auth:sanctum')->get('/voetballers', [VoetbalController::class, 'getVoetballers']);

Route::post('/login', function(Request $request) {
    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'user' => $user,
        'token' => $token
    ]);
});
