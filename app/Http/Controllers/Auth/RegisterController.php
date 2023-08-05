<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            //'prenoms' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        if ($data['id_type_client'] == 1) {
            $array = [
                'nom' => $data['nom'],
                'prenoms' => $data['prenoms'],
                'telephone' => $data['telephone'],
                'description' => $data['description'],
                'date_naissance' => $data['date_naissance'],
                'id_type_client' => $data['id_type_client'],
                'email' => $data['email'],
                'approve' => true,
            ];
        } else if ($data['id_type_client'] == 2) {
            $data['prenoms'] = "";
            $array = [
                'nom' => $data['nom'],
                // 'prenoms' =>'',
                'telephone' => $data['telephone'],
                'description' => $data['description'],
                'type_entreprise' => $data['type_entreprise'],
                'site_web' => $data['site_web'],
                //'date_naissance' => $data['date_de_naissance'],
                'id_type_client' => $data['id_type_client'],
            ];
        }
        $insertion = Client::create($array);
        // dd($insertion);
        if ($insertion) {
            return User::create([
                'name' => $data['nom'] . " " . $data['prenoms'],
                'email' => $data['email'],
                'id_client' => $insertion->id,
                'password' => Hash::make($data['password']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
