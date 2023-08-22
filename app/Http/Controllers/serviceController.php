<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Secteur;
use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        $Counter = 1;
        return view('Administration.parametrage.services.index', compact('services', 'Counter', 'departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.services.ajouter', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = array(
            'libelle' => 'required',
            'idDepartement' => 'required',
            'description' => 'required',
        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            'description' => $request->description,
            'departement_id' => $request->idDepartement,
            'created_at' => now()
            // 'updated_at'=>now()
        );
        // agents de la police nationale* chargé de la protection des ambassades et consulats français à l'étrange
        if (Service::insert($data)) {
            return redirect('/administration/services')->with('added', 'added');
        } else {
            return redirect('/administration/services')->with('nothing', 'nothing');
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $services = Service::where('id', $id)->firstOrFail();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.services.detail', compact('services', 'departements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::where('id', $id)->firstOrFail();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.services.modifier', compact('services', 'departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::where('id', $id)->firstOrFail();

        $check = array(
            'libelle' => 'required',
            'idDepartement' => 'required',
            'description' => 'required',
        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            'departement_id' => $request->idDepartement,
            'description' => $request->description,
            //  'created_at' => now()
            'updated_at' => now()
        );
        if ($service->update($data)) {
            return redirect('/administration/services')->with('updated', 'updated');
        } else {
            return redirect('/administration/services')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Service::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('/administration/services')->with('deleted', 'deleted');
        } else {
            return redirect('/administration/services')->with('nothing', 'nothing');
        };
    }
}
