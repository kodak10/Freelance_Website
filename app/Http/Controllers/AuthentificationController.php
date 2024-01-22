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
use Illuminate\Support\Facades\Session;




class AuthentificationController extends Controller
{

    // Action register
    public function registerClient(Request $request)
    {

        // La validation
        $rules = [
            'nom' => ['required', 'string', 'max:255'],
            'prenoms' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'telephone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:6', 'confirmed'],
        ];

        $messages = [
            'nom.required' => 'Le champ nom est requis.',
            'prenoms.required' => 'Le champ prénoms est requis.',
            'telephone.required' => 'Le champ téléphone est requis.',
            'telephone.unique' => 'Le champ téléphone est déjà utilisée par un autre utilisateur.',
            'password.required' => 'Le champ mot de passe est requis.',
            'password.confirmed' => 'Les deux mot de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
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
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ])->assignRole("client");

        // nouveau client
        $client = Client::create([
            'name' => $request->nom,
            'prenoms' => $request->prenoms,
            'telephone' => $request->telephone,
            'user_id' => $user->id,
        ]);

        Session::flash('success', 'Inscription réussie ! Connectez-vous maintenant.');

        return redirect()->route('inscription');
    }

    public function registerEntreprise(Request $request)
    {
        // La validation
        $rules = [
            'type_entreprise' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'nationalite' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:6', 'confirmed'],
            'regime' => ['required', 'string', 'max:255', 'unique:entreprises'],
            'localisation' => ['required'],
        ];

        $messages = [
            'type_entreprise.required' => 'Le type d\' entreprise est requis.',
            'name.required' => 'Le champ nom est requis.',
            'localisation.required' => 'Le champ localisation est requis.',
            'regime.required' => 'Le champ regime est requis.',
            'nationalite.required' => 'Le champ nationalité est requis.',
            'password.confirmed' => 'Les deux champs de mot de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'email.unique' => 'L\'adresse email est déjà utilisée par un autre utilisateur.',
            'regime.unique' => 'Le régime est déjà utilisée par un autre utilisateur.',
            'telephone.required' => 'Le champ telephone est requis.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

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
            'approve' => '1',
        ]);

        Session::flash('success', 'Inscription réussie ! Connectez-vous maintenant.');

        return redirect()->route('inscription');
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
            return redirect('/login')->with(["success" => true, "message" => "Vous êtes connectés avec succès"], 403);
        }

        // Si l'utilisateur est une entreprise

        if (Auth::user()->hasRole('compagny')) {

            if (Auth::user()->compagny->approve != 0) {
                return redirect('/login')->with(["success" => true, "message" => "Vous êtes connectés avec succès"], 403);
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

    public function send_mail(){
        echo 'En cours de réalisation' ;
    }

    public function validation_email(){
        echo 'En cours de réalisation' ;
    }

}
