<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DemandeService;
use App\Models\Entreprise;
use App\Models\Service;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        $entreprises = Entreprise::get();
        $demandes = DemandeService::get();
        $services = Service::get();
        return view('Administration.home', compact('clients','entreprises','demandes','services' ));
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
        //
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

    public function update_profil_()
    {
        $user = Auth::user() ;
        $client = Auth::user()->client ;
    
        //$extension = strtolower($request->file('image')->getClientOriginalExtension());
    
        $rules = [
            'name' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'password' => 'nullable|string|confirmed',
            'telephone' => 'nullable|string|max:15',
            'image' => 'image|mimes:jpeg,png,gif,webp,jpg|max:2048'
        ];
    
        $messages = [
            'name.required' => 'Le champ nom est requis.',
            'nationalite.required' => 'Le champ nationalité est requis.',
            'password.confirmed' => 'Les deux champs de mot de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'old_password.custom_validation' => 'Le mot de passe actuel est incorrecte.',
            'image.image' => 'Le fichier doit être une image valide.',
            'image.mimes' => 'Seules les images de type :values sont autorisées.',
            'image.max' => 'La taille maximale de l\'image est de :max kilo-octets.',
            'email.unique' => 'L\'adresse email est déjà utilisée par un autre utilisateur.',
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
    
        if ($request->filled('old_password')) {
            // Valider l'ancien mot de passe
            if (!password_verify($request->input('old_password'), $user->password)) {
                return redirect()->back()->with('error', 'Mot de passe actuel incorrect.');
    
            }
    
            // Mettre à jour le nouveau mot de passe
            $user->password = bcrypt($request->input('password'));
        }
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $user->id . '_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/profil'), $imageName);
            $client->photo = $imageName;
        }
    
        $user->name = $request->input('name');
    
        $client->name = $request->input('name');
        $client->prenoms = $request->input('prenoms');
        $client->telephone = $request->input('telephone');
    
        $user->save();
        $client->save();
    
        return redirect('/user/profil/edit')->with('success', 'Profil mis à jour avec succès.');
    }
}
