<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EntrepriseDemandeServiceController;

class EntrepriseDemandeServiceController extends Controller
{
    public function index()
    {
        return view('Entreprise.home');
    }

    public function demande()
    {
        return view('Entreprise.demande_service');
    }

}
