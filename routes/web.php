<?php

use Spatie\Permission\Models\Role;
use App\Http\Controllers\accesUtilisateurController;
use App\Http\Controllers\AuthentificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\secteurController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\departementController;
use App\Http\Controllers\demandesInscriptionController;

// Route site Web
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::post('/login', [AuthentificationController::class, 'login'])->name('postLogin');
//Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('/login', [AuthentificationController::class, 'loginForm'])->name('login');
Route::post('/register/client', [AuthentificationController::class, 'registerClient'])->name('inscriptionClient');
Route::post('/register/entreprise', [AuthentificationController::class, 'registerEntreprise'])->name('inscriptionEntreprise');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout' ])->name('logout');

Route::get('/register', function () {
    return view('register');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/services/details', function () {
    return view('services-details');
});
Route::get('/administration/login', function () {
    return view('Administration.login');
});


// Vos routes d'administration ici
Route::prefix('administration')->middleware(['auth', 'verified' ,'role:service-client'])->group(function () {

    Route::get('/', [App\Http\Controllers\demandesInscriptionController::class, 'index']);
    Route::get('/detail', function () {
        return view('Administration.detail');
    });
    // route des departements
    Route::resource('departements', departementController::class);
    // route des secteurs
    Route::resource('secteurs', secteurController::class);
    // route des services
    Route::resource('services', serviceController::class);
    // route des demandes d inscription
    Route::resource('demandes_inscription', demandesInscriptionController::class);
    // route des acces users
    Route::resource('acces_utilisateurs', accesUtilisateurController::class);
});

// Vos routes d'user ici
Route::prefix('user')->middleware(['auth', 'verified','role:client'])->group(function () {
    Route::get('/', function () {
        return view('Client.home');
    });

    Route::get('/detail', function () {
        return view('Client.detail');
    });
});

// Vos routes d'user ici
Route::prefix('compagny')->middleware(['auth', 'verified' ,'role:compagny'])->group(function () {
    Route::get('/', function () {
        return view('Entreprise.home');
    });
    Route::get('/detail', function () {
        return view('Entreprise.detail');
    });

});


//Auth::routes();