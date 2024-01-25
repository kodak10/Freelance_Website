<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ServiceClientController extends Controller
{
    public function liste_clients()
    {
        $clients = Client::get();
        return view('Administration.clients.index',compact('clients'));
    }

    public function create_clients()
    {
        return view('Administration.clients.create');
    }

}
