<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DemandeService;
use App\Models\ServiceEntreprise;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use App\Models\Departement;


class ClientController extends Controller
{
    public function index(){

        $categories = Departement::get();
        return view('Client.home', compact('categories'));
    }

    

    public function edit()
    {
        return view('Client.profil');
    }

    public function update_profil(Request $request)
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
        $image->move(public_path)('public/assets/images/profil', $imageName);
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
