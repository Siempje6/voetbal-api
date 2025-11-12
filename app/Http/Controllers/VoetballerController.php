<?php

namespace App\Http\Controllers;

use App\Models\Voetballer;
use App\Models\Club;
use Illuminate\Http\Request;

class VoetballerController extends Controller
{
    public function index()
    {
        $voetballers = Voetballer::with('clubs')->get();
        return view('overzicht', compact('voetballers'));
    }

    public function create()
    {
        $clubs = Club::all();
        return view('add', compact('clubs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'leeftijd' => 'required|integer',
            'positie' => 'required',
            'club_id' => 'required'
        ]);

        $voetballer = Voetballer::create($request->only(['naam', 'leeftijd', 'positie']));
        $voetballer->clubs()->attach($request->club_id);

        return redirect()->route('voetballers.index')->with('success', 'Speler toegevoegd!');
    }

    public function show($id)
    {
        $voetballer = Voetballer::with('clubs')->findOrFail($id);
        return view('speler', compact('voetballer'));
    }

    public function edit($id)
    {
        $voetballer = Voetballer::with('clubs')->findOrFail($id);
        $clubs = Club::all();
        return view('edit', compact('voetballer', 'clubs'));
    }

    public function update(Request $request, $id)
    {
        $voetballer = Voetballer::findOrFail($id);
        $voetballer->update($request->only(['naam', 'leeftijd', 'positie']));
        $voetballer->clubs()->sync([$request->club_id]);

        return redirect()->route('voetballers.index')->with('success', 'Speler bijgewerkt!');
    }

    public function destroy($id)
    {
        $voetballer = Voetballer::findOrFail($id);
        $voetballer->delete();
        return redirect()->route('voetballers.index')->with('success', 'Speler verwijderd!');
    }
}
