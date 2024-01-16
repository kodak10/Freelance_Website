<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;


class ForgotPasswordController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    //use SendsPasswordResetEmails;

    use SendsPasswordResetEmails, ResetsPasswords {
        ResetsPasswords::broker insteadof SendsPasswordResetEmails;
        SendsPasswordResetEmails::broker as sendsPasswordResetEmailsBroker;
    }

    // Utilisez cette méthode si nécessaire pour résoudre le conflit
    public function broker()
    {
        return $this->sendsPasswordResetEmailsBroker();
    }
    public function showResetForm($token)
    {
        return view('auth.passwords.reset')->with(['token' => $token]);
    }
}
