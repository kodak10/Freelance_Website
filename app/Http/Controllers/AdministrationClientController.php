<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AdministrationClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('Administration.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administration.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // La validation
         $rules = [
            'nom' => ['required', 'string', 'max:255'],
            'prenoms' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'telephone' => ['required', 'string', 'max:255'],
            //'password' => ['required', 'min:6', 'confirmed'],
        ];

        $messages = [
            'nom.required' => 'Le champ nom est requis.',
            'prenoms.required' => 'Le champ prénoms est requis.',
            'telephone.required' => 'Le champ téléphone est requis.',
            'telephone.unique' => 'Le champ téléphone est déjà utilisée par un autre utilisateur.',
           //  'password.required' => 'Le champ mot de passe est requis.',
           //  'password.confirmed' => 'Les deux mot de passe ne correspondent pas.',
           //  'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'email.unique' => 'L\'adresse email est déjà utilisée par un autre utilisateur.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // nouvel user pour les infos de connexion
        $user = User::create([
            'name' => $request->nom,
            'email' => strtolower($request->email),
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ])->assignRole("client");

        // nouveau client
        $client = Client::create([
            'name' => $request->nom,
            'prenoms' => $request->prenoms,
            'telephone' => $request->telephone,
            'user_id' => $user->id,
        ]);

        Session::flash('success', "Inscription réussie ! Le mot de passe de connexion par defaut est <strong>password</strong>. L'utilisateur est invité à le réinitialiser dans son tableau de bord. ");

        return redirect()->route('clients.create');
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
