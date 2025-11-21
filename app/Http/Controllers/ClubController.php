<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::withCount('voetballers')->get();
        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'stad' => 'required',
        ]);

        Club::create($request->only('naam', 'stad'));

        return redirect()->route('clubs.index')->with('success', 'Club toegevoegd.');
    }

    public function show(Club $club)
    {
        $club->load('voetballers');
        return view('clubs.show', compact('club'));
    }

    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $request->validate([
            'naam' => 'required',
            'stad' => 'required',
        ]);

        $club->update($request->only('naam', 'stad'));

        return redirect()->route('clubs.index')->with('success', 'Club bijgewerkt.');
    }

    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->route('clubs.index')->with('success', 'Club verwijderd.');
    }
}
