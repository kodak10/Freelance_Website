<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class accesUtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User = User::all();
        $Counter = 1;
        return view('Administration.parametrage.utilisateurs.index', compact('Counter', 'User'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administration.parametrage.utilisateurs.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $check = array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        );
        $request->validate($check);
        $data = array(
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'created_at' => now()
            // 'updated_at'=>now()
        );
        if (User::insert($data)) {
            return redirect('/administration/acces_utilisateurs')->with('added', 'added');
        } else {
            return redirect('/administration/acces_utilisateurs')->with('nothing', 'nothing');
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $User = User::where('id', $id)->firstOrFail();
        return view('Administration.parametrage.utilisateurs.detail', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $User = User::where('id', $id)->firstOrFail();
        return view('Administration.parametrage.utilisateurs.modifier', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $User = User::where('id', $id)->firstOrFail();

        $check = array(
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
        );
        $request->validate($check);
        if (empty($request->password)) {
            $data = array(
                'name' => $request->name,
                // 'password' => Hash::make($request->password),
                'email' => $request->email,
                'isAdmin' => 1,
                // 'created_at' => now()
                'updated_at' => now()
            );
        } else {
            $data = array(
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'isAdmin' => 1,
                // 'created_at' => now()
                'updated_at' => now()
            );
        }

        if ($User->update($data)) {
            return redirect('/administration/acces_utilisateurs')->with('updated', 'updated');
        } else {
            return redirect('/administration/acces_utilisateurs')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = User::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('/administration/acces_utilisateurs')->with('deleted', 'deleted');
        } else {
            return redirect('/administration/acces_utilisateurs')->with('nothing', 'nothing');
        };
    }
}
