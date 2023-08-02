<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class departementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        $Counter = 1;
        return view('Administration.parametrage.departements.index', compact('departements', 'Counter'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administration.parametrage.departements.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = array(
            'libelle' => 'required',

        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            'created_at' => now()
            // 'updated_at'=>now()
        );
        if (departement::insert($data)) {
            return redirect('departements')->with('added', 'added');
        } else {
            return redirect('departements')->with('nothing', 'nothing');
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departements = Departement::where('id', $id)->firstOrFail();
        return view('Administration.parametrage.departements.detail', compact('departements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departements = Departement::where('id', $id)->firstOrFail();
        return view('Administration.parametrage.departements.modifier', compact('departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departement = Departement::where('id', $id)->firstOrFail();
        $check = array(
            'libelle' => 'required',
        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            // 'created_at'=>now(),
            'updated_at' => now()
        );
        if ($departement->update($data)) {
            return redirect('departements')->with('updated', 'updated');
        } else {
            return redirect('departements')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Departement::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('departements')->with('deleted', 'deleted');
        } else {
            return redirect('departements')->with('nothing', 'nothing');
        };
    }
}
