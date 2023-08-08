<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            /* if (Auth::guard($guard)->check()) {
                //return redirect(RouteServiceProvider::HOME);

                if (Auth::user()->hasRole('client')) {
                    return redirect()->route('about');
                }

                // Si l'utilisateur est le service client
                if (Auth::user()->hasRole('service-client')) {
                    return redirect()->route('demandes_inscription.index');
                }

            } */

            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();

                if ($user instanceof User) {
                    if ($user->hasRole('client')) {
                        // Redirection pour les clients
                        return redirect('/client');
                    } elseif ($user->hasRole('compagny')) {
                        // Redirection pour les entreprise
                        return redirect('/compagny');
                    }
                }
            }
        }

        return $next($request);
    }
}
