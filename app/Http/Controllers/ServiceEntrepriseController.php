<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\ServiceEntreprise;

class ServiceEntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        $departements = Departement::get();
        return view('entreprise.service.index', compact('services', 'departements'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::get();
        $departements = Departement::get();
        return view('Entreprise.Service.create', compact('services', 'departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = array(
            'idService' => 'required',
            'description' => 'required',
            'delais' => 'required',

        );
        $request->validate($check);
        $data = array(
            'service_id' => $request->idService,
            'description' => $request->description,
            'delais_execution' => $request->delais,
        );
        if (ServiceEntreprise::insert($data)) {
            return redirect('/compagny/services')->with('added', 'added');
        } else {
            return redirect('/compagny/services')->with('nothing', 'nothing');
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::where('id', $id)->firstOrFail();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Entreprise.Service.edit', compact('services', 'departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = ServiceEntreprise::where('id', $id)->firstOrFail();

        $check = array(
            'idService' => 'required',
            'description' => 'required',
            'delais' => 'required',

        );
        $request->validate($check);
        $data = array(
            'service_id' => $request->idService,
            'description' => $request->description,
            'delais_execution' => $request->delais,
        );
        if ($service->update($data)) {
            return redirect('/compagny/services')->with('updated', 'updated');
        } else {
            return redirect('/compagny/services')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = ServiceEntreprise::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('/compagny/services')->with('deleted', 'deleted');
        } else {
            return redirect('/compagny/services')->with('nothing', 'nothing');
        };
    }
}
