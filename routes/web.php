<?php

use Spatie\Permission\Models\Role;
use App\Http\Controllers\accesUtilisateurController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\DemandeServiceClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\secteurController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\departementController;
use App\Http\Controllers\demandesInscriptionController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EntrepriseDemandeServiceController;
use App\Http\Controllers\ServiceEntrepriseController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\ForgotPasswordController;


// Route site Web
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/blog', [WebsiteController::class, 'blog']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/post', [WebsiteController::class, 'send_message'])->name('send_message');

Route::get('/services', [WebsiteController::class, 'services']);
Route::get('/services', [WebsiteController::class, 'search'])->name('services.search');

// Route::get('/services/{slug}', [WebsiteController::class, 'showEntrepriseService'])->name('EntrepriseService.show');


// Route::get('/services/{entreprise_nom}/details', [WebsiteController::class, 'serviceShow'])->name('serviceDetail.show');

Route::get('/services/{service}/entreprises', [WebsiteController::class, 'showEntrepriseService'])->name('services_entreprises');
Route::get('/entreprises/{service}/{entreprise}/details', [WebsiteController::class, 'serviceShow'])->name('services_entreprise_details');

Route::get('/departements', [WebsiteController::class, 'departements']);
Route::resource('demandeService', DemandeServiceClientController::class);

Route::get('/reset', function(){
    return view('reset')->name('reset');
});

Route::get('/connexion', [WebsiteController::class, 'login'])->name('login');
Route::get('/inscription', [WebsiteController::class, 'register'])->name('inscription');

Route::get('/forget', [WebsiteController::class, 'forget_password']);
Route::post('/forget', [AuthentificationController::class, 'forget_password'])->name('send_mail');

Route::get('/validation', [WebsiteController::class, 'validation']);
Route::post('/validation', [AuthentificationController::class, 'validation'])->name('validation_email');

Route::get('/verif', [WebsiteController::class, 'verif'])->name('verif');

Route::get('/entreprise', [WebsiteController::class, 'entreprise_service_index']);
Route::get('/entreprise/{id}', [WebsiteController::class, 'entreprise_service']);


// Route Auth
Route::post('/connexion', [AuthentificationController::class, 'login'])->name('postLogin');
Route::post('/inscription_client', [AuthentificationController::class, 'registerClient'])->name('inscriptionClient');
Route::post('/inscription_entreprise', [AuthentificationController::class, 'registerEntreprise'])->name('inscriptionEntreprise');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout' ])->name('logout');


// Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.reset');

Route::get('/password/reset/{token}', function (string $token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');


Route::post('/password/reset', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// Vos routes d'administration ici
// Route::prefix('administration')->middleware(['auth', 'verified' ,'role:serviceClient'])->group(function () {  // Sans validation email
Route::prefix('administration')->middleware(['auth', 'role:serviceClient'])->group(function () {

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
// Route::prefix('user')->middleware(['auth', 'verified','role:client'])->group(function () {   // Sans validation email
Route::prefix('user')->middleware(['auth','role:client'])->group(function () {

    Route::get('/', [ClientController::class, 'index']);
    Route::get('/profil/edit', [ClientController::class, 'edit']);
    Route::post('/profil/edit', [ClientController::class, 'update_profil'])->name('update_profil_client');

});

// Vos routes d'user ici
// Route::prefix('compagny')->middleware(['auth', 'verified' ,'role:compagny'])->group(function () {    // Sans validation email
Route::prefix('compagny')->middleware(['auth','role:compagny', ])->group(function () {
    Route::get('/', [EntrepriseController::class, 'index']);

    Route::resource('/service', ServiceEntrepriseController::class);

    Route::get('/demandes', [EntrepriseController::class, 'demandes']);
    Route::get('/demandes/details/{id}', [EntrepriseController::class, 'demandes_details'])->name('demande.details');
    //Route::get('/compagny/demandes/details/{id}', [DemandeController::class, 'show'])->name('demande.details');

    Route::get('/profil/edit', [EntrepriseController::class, 'edit']);
    Route::post('/profil/edit', [EntrepriseController::class, 'update'])->name('update_profil');


});
