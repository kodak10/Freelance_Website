<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\ServiceEntreprise;
use Illuminate\Support\Facades\Auth;

class ServiceEntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = ServiceEntreprise::where('entreprise_id', Auth::user()->compagny->id)->get();
        $departements = Departement::get();
        $service = Service::get();
        $Counter = 1;
        return view('Entreprise.service.index', compact('services', 'departements', 'Counter', 'service'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $services = Service::get();
        $services = Service::get();
        return view('Entreprise.Service.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = array(
            'service' => 'required',
            'libelle' => 'required',
            'description' => 'required',
            'delais' => 'required',
            'entreprise' => 'required',

        );
        $request->validate($check);
        $data = array(
            'entreprise_id' => $request->entreprise,
            'service_id' => $request->service,
            'description' => $request->description,
            'libelle' => $request->libelle,
            'delais_execution' => $request->delais,

        );
        if (ServiceEntreprise::insert($data)) {
            return redirect('/compagny/service/create')->with('added', 'added');
        } else {
            return redirect('/compagny/service/create')->with('nothing', 'nothing');
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
        $services = ServiceEntreprise::where('id', $id)->firstOrFail();
        $service = Service::where('id', $services->service->id)->firstOrFail();
        $service_full = Service::get();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Entreprise.Service.edit', compact('services', 'departements', 'service', 'service_full'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services = ServiceEntreprise::where('id', $id)->firstOrFail();


        $check = array(
            'service' => 'required',
            'libelle' => 'required',
            'description' => 'required',
            'delais' => 'required',
            'entreprise' => 'required',

        );

        $request->validate($check);
        $data = array(
            'entreprise_id' => $request->entreprise,
            'service_id' => $request->service,
            'description' => $request->description,
            'libelle' => $request->libelle,
            'delais_execution' => $request->delais,

        );


        if ($services->update($data)) {
            return redirect('/compagny/service')->with('updated', 'updated');
        } else {
            return redirect('/compagny/service')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = ServiceEntreprise::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('/compagny/service')->with('deleted', 'deleted');
        } else {
            return redirect('/compagny/service')->with('nothing', 'nothing');
        };
    }
}
