<?php

use Illuminate\Support\Facades\Route;



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

Route::get('/administration/detail', function () {
    return view('Administration.detail');
});

Route::get('/client', function () {
    return view('Client.home');
});

Route::get('/client/detail', function () {
    return view('Client.detail');
});

Route::get('/entreprise', function () {
    return view('Entreprise.home');
});

Route::get('/entreprise/detail', function () {
    return view('Entreprise.detail');
});