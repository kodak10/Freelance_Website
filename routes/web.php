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