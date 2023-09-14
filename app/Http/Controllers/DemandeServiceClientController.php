<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use App\Models\DemandeService;
use App\Models\DemandeServiceClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DemandeServiceClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes = DemandeService::where('entreprise_id', Auth::user()->id);
        return view('Entreprise.demande_service', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // La validation
        $validator = Validator::make($request->all(), [
            'client_id' => ['required', 'string', 'max:255'],
            'entreprise_id' => ['required', 'string', 'max:255'],
            'service_id' => ['required', 'string', 'max:255'],
            'description' => ['required', 'max:255'],
            'delais_execution' => ['string', 'max:10'],
            'document' => ['max:255'],
        ]);

        if (!Auth::check())
        {
            return redirect()->back()->with('error',"Veuillez vous connecter avant de pouvoir contacté une entreprise");
        }

        if (Auth::user()->client->id === 0)
        {
            return redirect()->back()->with('error',"Veuillez vous connecter à votre compte client avant de pourvoir envoyé des demandes");
        }



        else {
            // demande de service
            $demandeService = DemandeService::create([
                'client_id' => $request->client_id,
                'entreprise_id' => $request->entreprise_id,
                'service_id' => $request->service_id,
                'description' => $request->description,
                'delais_execution' => $request->delais_execution,
                'document' => $request->document,

            ]);

            return redirect()->back()->with('success',"Votre demande à été transmise avec succès à l'Entreprise");
        }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
