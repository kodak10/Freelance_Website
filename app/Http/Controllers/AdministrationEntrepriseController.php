<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdministrationEntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprises = Entreprise::get();
        return view('Administration.entreprises.index', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administration.entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // La validation
        $rules = [
            'type_entreprise' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'nationalite' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            //'password' => ['required', 'min:6', 'confirmed'],
            'regime' => ['required', 'string', 'max:255',],
            'localisation' => ['required'],
        ];

        $messages = [
            'type_entreprise.required' => 'Le type d\' entreprise est requis.',
            'name.required' => 'Le champ nom est requis.',
            'localisation.required' => 'Le champ localisation est requis.',
            'regime.required' => 'Le champ regime est requis.',
            'nationalite.required' => 'Le champ nationalité est requis.',
            // 'password.confirmed' => 'Les deux champs de mot de passe ne correspondent pas.',
            // 'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'email.unique' => 'L\'adresse email est déjà utilisée par un autre utilisateur.',
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
            'password' => Hash::make('password'),
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

        Session::flash('success', "Inscription réussie ! Le mot de passe de connexion par defaut est <strong>password</strong>. L'utilisateur est invité à le réinitialiser dans son tableau de bord. ");

        return redirect()->route('entreprises.create');
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
