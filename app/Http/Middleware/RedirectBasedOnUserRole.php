<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RedirectBasedOnUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);

        if (auth()->check()) {
            //$user = auth()->user();

            // Si l'utilisateur est un client
            if (Auth::user()->hasRole('client')) {
                return redirect('/user');
            }

            // Si l'utilisateur est une entreprise
            if (Auth::user()->hasRole('compagny')) {
                return redirect('/compagny');
            }

            // Si l'utilisateur est le service client
            if (Auth::user()->hasRole('serviceClient')) {
                return redirect('/administration');
            }

        }

        return $next($request);
    }
}
