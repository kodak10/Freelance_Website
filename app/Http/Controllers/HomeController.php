<?php

namespace App\Http\Controllers;

use App\Models\Client;
use view;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user());
        if (Auth::user()->isAdmin == 1) {
            return view('Administration.home');
        } else {
            $id_client = Auth::user()->id_client;
            $userConnected = Client::find($id_client);
            // dd($userConnected);
            if ($userConnected->id_type_client == 2) {
                if ($userConnected->approve == false) {
                    auth()->logout();
                    return redirect('/login')->with('not_approved', 'not_approved');
                }
                return view('entreprise.home');
            } else if ($userConnected->id_type_client == 1) {
                return view('particulier.home');
            }
        }
    }
    public function logout()
    {
        auth()->logout();
        if (Auth::user()->isAdmin == 1) {
            return redirect('/login');
        } else {
            // redirect to homepage
            return redirect('/');
        }
    }
}
