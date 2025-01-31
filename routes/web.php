<?php

use App\Http\Controllers\ControllerContact;
use App\Http\Controllers\ControllerServices;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/Accueil');
});

// frontend

Route::get('/service',[ControllerServices::class,'services']);
Route::get('/services',[ControllerServices::class,'listeservices']);
Route::get('/about',[ControllerContact::class,'abouts']);
Route::get('/contact',[ControllerContact::class,'contacts']);

// backend

Route::post('/service',[ControllerServices::class,'addservices']);
Route::post('/contacts',[ControllerContact::class,'addcontacts']);

