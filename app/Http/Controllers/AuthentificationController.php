<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;



class AuthentificationController extends Controller
{

    // Action register
    public function registerClient(Request $request)
    {

        // La validation
        $validator = Validator::make($request->all(), [
            'type_entrepirse' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'nationalite' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed'],
            'regime' => ['required'],
            "localisation" => ["required"],
            Rule::unique('users', 'email'),
            Rule::unique('clients', 'email'),

        ]);

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

        //$validator = Validator::make($request->all(), $validator, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        // nouvel user pour les infos de connexion
        $user = User::create([
            'name' => $request->nom,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ])->assignRole("client");

        // nouveau client
        $client = Client::create([
            'name' => $request->nom,
            'prenoms' => $request->prenoms,
            'telephone' => $request->telephone,
            'date_naissance' => $request->dat_nais,
            'user_id' => $user->id,
        ]);

        return redirect()->route('verif')->with('success','Votre inscription à été prise en compte');

    }

    public function registerEntreprise(Request $request)
    {
        // La validation
        $validator = Validator::make($request->all(), [
            'type_entrepirse' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'nationalite' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->where(function ($query) {
                return $query->where('role', 'compagny');
            })],
            'telephone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed'],
            'regime' => ['required'],
            'localisation' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,gif,webp,jpg', 'max:2048'], // Ajustez les règles pour les images
        ]);

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

        //$validator = Validator::make($request->all(), $validator, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        // nouvel user pour les infos de connexion
        $user = User::create([
            'name' => $request->name,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ])->assignRole("compagny");

        // nouvelle entreprise
        $entreprise = Entreprise::create([
            'num_inscription' => mt_rand(10000, 99999),
            'type_entreprise' => $request->type_entreprise,
            'name' => $request->name,
            'nationalite' => $request->nationalite,
            'telephone' => $request->telephone,
            'email' => strtolower($request->email),
            'regime' => $request->regime,
            'localisation' => $request->localisation,
            'user_id' => $user->id,
            'image' => 'default.jpg',
        ]);

        return redirect()->route('verif')->with('success','Votre inscription à été prise en compte');

    }

    public function registerServiceClient(Request $request)
    {

    }

    public function loginForm()
    {
        return view('login');
    }


    // Action login
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        // Verification Email Mot de passe
        if (!auth()->attempt($data)) {
            return redirect()->route('login')->with([
                "success" => false,
                "message" => "Email ou mot de passe incorrecte"
            ]);
        }

        // Verification si l'email à été valider
        if (!auth()->user()->email_verified_at) {
            auth()->user()->tokens()->delete();
            //return redirect()->route('login')->with('success','Votre inscription à été prise en compte');

            return redirect()->route('login')->with(["success" => false, "message" => "Vous devez valider votre email avant de vous connecter"], 403);
        }

        // Si l'utilisateur est un client
        if (Auth::user()->hasRole('client')) {
            return redirect('/login')->with(["success" => true, "message" => "Vous êtes connecter avec succès"], 403);
        }

        // Si l'utilisateur est une entreprise

        if (Auth::user()->hasRole('compagny')) {

            if (Auth::user()->compagny->approve != 0) {
                return redirect('/login')->with(["success" => true, "message" => "Vous êtes connecter avec succès"], 403);
            }

            else if (Auth::user()->compagny->approve !== 0) {
                auth()->user()->tokens()->delete();
                return redirect('/login')->with(["success" => false, "message" => "Votre compte est en attente de vérification"], 403);
            }


        }
        // Si l'utilisateur est le service client
        if (Auth::user()->hasRole('serviceClient')) {
            return redirect('/administration');
        }

    }

}
