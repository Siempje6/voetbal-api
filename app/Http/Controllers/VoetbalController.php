<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Voetballer;

class VoetbalController extends Controller
{
    public function getClubs(Request $request)
    {
        $clubs = Club::all();
        return response()->json($clubs);
    }

    public function getVoetballers(Request $request)
    {
        $voetballers = Voetballer::all();
        return response()->json($voetballers);
    }
}
