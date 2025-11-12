<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::with('voetballers')->get();
        return view('clubs.overzicht', compact('clubs'));
    }

    public function show($id)
    {
        $club = Club::with('voetballers')->findOrFail($id);
        return view('clubs.show', compact('club'));
    }
}
