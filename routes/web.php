<?php

use App\Http\Controllers\accesUtilisateurController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\secteurController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\departementController;
use App\Http\Controllers\demandesInscriptionController;



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
Route::get('/login', function () {
    return view('login');
});
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

Route::get('/administration', function () {
    return view('Administration.home');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
