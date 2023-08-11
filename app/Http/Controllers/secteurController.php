<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Secteur;
use Illuminate\Http\Request;

class secteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secteurs = Secteur::all();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        $Counter = 1;
        return view('Administration.parametrage.secteurs.index', compact('secteurs', 'Counter', 'departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.secteurs.ajouter', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = array(
            'libelle' => 'required',
            'idDepartement' => 'required',
        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            'departement_id' => $request->idDepartement,
            'created_at' => now()
            // 'updated_at'=>now()
        );
        if (Secteur::insert($data)) {

            return redirect('/administration/secteurs')->with('added', 'added');
        } else {
            return redirect('/administration/secteurs')->with('nothing', 'nothing');
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $secteurs = Secteur::where('id', $id)->firstOrFail();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.secteurs.detail', compact('departements', 'secteurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $secteurs = Secteur::where('id', $id)->firstOrFail();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.secteurs.modifier', compact('departements', 'secteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $secteur = Secteur::where('id', $id)->firstOrFail();

        $check = array(
            'libelle' => 'required',
            'idDepartement' => 'required',
        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            'departement_id' => $request->idDepartement,
            //  'created_at' => now()
            'updated_at' => now()
        );
        if ($secteur->update($data)) {
            return redirect('/administration/secteurs')->with('updated', 'updated');
        } else {
            return redirect('/administration/secteurs')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Secteur::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('/administration/secteurs')->with('deleted', 'deleted');
        } else {
            return redirect('/administration/secteurs')->with('nothing', 'nothing');
        };
    }
}
