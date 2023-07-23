<?php

namespace App\Http\Controllers;

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
        $secteurs = Secteur::orderBy('libelle', 'asc')->get();
        $Counter = 1;
        return view('Administration.parametrage.services.index', compact('services', 'Counter', 'secteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secteurs = Secteur::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.services.ajouter', compact('secteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = array(
            'libelle' => 'required',
            'idSecteur' => 'required',
            'description' => 'required',
        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            'description' => $request->description,
            'idSecteur' => $request->idSecteur,
            'created_at' => now()
            // 'updated_at'=>now()
        );
        // agents de la police nationale* chargé de la protection des ambassades et consulats français à l'étrange
        if (Service::insert($data)) {
            return redirect('services')->with('added', 'added');
        } else {
            return redirect('services')->with('nothing', 'nothing');
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $services = Service::where('id', $id)->firstOrFail();
        $secteurs = Secteur::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.services.detail', compact('services', 'secteurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::where('id', $id)->firstOrFail();
        $secteurs = Secteur::orderBy('libelle', 'asc')->get();
        return view('Administration.parametrage.services.modifier', compact('services', 'secteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::where('id', $id)->firstOrFail();

        $check = array(
            'libelle' => 'required',
            'idSecteur' => 'required',
            'description' => 'required',
        );
        $request->validate($check);
        $data = array(
            'libelle' => $request->libelle,
            'idSecteur' => $request->idSecteur,
            'description' => $request->description,
            //  'created_at' => now()
            'updated_at' => now()
        );
        if ($service->update($data)) {
            return redirect('services')->with('updated', 'updated');
        } else {
            return redirect('services')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Service::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('services')->with('deleted', 'deleted');
        } else {
            return redirect('services')->with('nothing', 'nothing');
        };
    }
}
