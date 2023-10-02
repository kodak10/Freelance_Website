<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeService;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{
    public function demande(){

        $demandes = DemandeService::where('entreprise_id', Auth::user()->compagny->id);
        return view('Entreprise.demande_service', compact('demandes'));
    }
}
