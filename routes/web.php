<?php

use App\Http\Controllers\ControllerContact;
use App\Http\Controllers\ControllerFrontEnd;
use App\Http\Controllers\ControllerServices;
use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/Accueil');
});
Route::get('/tableau', function () {
    return view('Layout/headadmin');
});

// ENTREGISTREMENT DES SERVICES
Route::get('/service',[ControllerServices::class,'services']);
Route::get('/services',[ControllerServices::class,'listeservices'])->name('serviceliste');
Route::post('/service',[ControllerServices::class,'addservices']);


// ENTREGISTREMENT DES BLOGS
Route::get('/blog',[ControllerFrontEnd::class,'blog']);
Route::get('/blogs',[ControllerFrontEnd::class,'listeblog'])->name('blogliste');
Route::post('/blog',[ControllerFrontEnd::class,'addblog']);

// MODIFICATION ET SUPRESSION DE NOS BLOGS
Route::get('/blog/edit/{id}', [ControllerFrontEnd::class, 'editblog']);
Route::post('/blog/edit', [ControllerFrontEnd::class, 'addeditblog']);
Route::get('/blog/delete/{id}', [ControllerFrontEnd::class, 'deleteblog']);

// ENTREGISTREMENT DES REFERENCES
Route::get('/reference',[ControllerFrontEnd::class,'reference']);
Route::get('/references',[ControllerFrontEnd::class,'listereference'])->name('blogreference');
Route::post('/reference',[ControllerFrontEnd::class,'addreference']);

// MODIFICATION ET SUPRESSION DE NOS REFERENCES
Route::get('/reference/edit/{id}', [ControllerFrontEnd::class, 'editreference']);
Route::post('/reference/edit', [ControllerFrontEnd::class, 'addeditreference']);
Route::get('/reference/delete/{id}', [ControllerFrontEnd::class, 'deletereference']);

// ENTREGISTREMENT DES PRESTATIONS
Route::get('/prestation',[ControllerFrontEnd::class,'prestation']);
Route::get('/prestations',[ControllerFrontEnd::class,'listeprestation'])->name('blogreference');
Route::post('/prestation',[ControllerFrontEnd::class,'addprestation']);

// MODIFICATION ET SUPRESSION DE NOS PRESTATIONS
Route::get('/prestation/edit/{id}', [ControllerFrontEnd::class, 'editprestation']);
Route::post('/prestation/edit', [ControllerFrontEnd::class, 'addeditprestation']);
Route::get('/prestation/delete/{id}', [ControllerFrontEnd::class, 'deleteprestation']);


// DETAILLES DU SERVICE ODOO
Route::get('/service-odoo',[ControllerServices::class,'odoo'])->name('service.create');
Route::get('/services-odoo',[ControllerServices::class,'description']);
Route::post('/service-odoo',[ControllerServices::class,'addservicesodoo'])->name('service.store');
Route::get('/odoo/edit/{id}', [ControllerServices::class, 'editodoo']);
Route::post('/edit', [ControllerServices::class, 'addeditodoo']);
Route::get('/odoo/delete/{id}', [ControllerServices::class, 'deleteodoo']);


// DETAILLES DU SERVICE BIGDATA
Route::get('/service-bigdata',[ControllerServices::class,'bigdata']);
Route::get('/services-bigdata',[ControllerServices::class,'descriptions']);
Route::post('/service-bigdata',[ControllerServices::class,'addservicesbigdata']);
Route::get('/bigdata/edit/{id}', [ControllerServices::class, 'editbigdata']);
Route::post('/bigdata/edit', [ControllerServices::class, 'addeditbigdata']);
Route::get('/bigdata/delete/{id}', [ControllerServices::class, 'deletebigdata']);


// DETAILLES DU SERVICE CYBER
Route::get('/service-cyber',[ControllerServices::class,'cyber']);
Route::get('/services-cyber',[ControllerServices::class,'cybers']);
Route::post('/service-cyber',[ControllerServices::class,'addservicescyber']);
Route::get('/cyber/edit/{id}', [ControllerServices::class, 'editcyber']);
Route::post('/cyber/edit', [ControllerServices::class, 'addeditcyber']);
Route::get('/cyber/delete/{id}', [ControllerServices::class, 'deletecyber']);


// DETAILLES DU SERVICE Formation
Route::get('/service-formation',[ControllerServices::class,'formation']);
Route::get('/services-formation',[ControllerServices::class,'formations']);
Route::post('/service-formation',[ControllerServices::class,'addservicesformation']);
Route::get('/formation/edit/{id}', [ControllerServices::class, 'editformation']);
Route::post('/formation/edit', [ControllerServices::class, 'addeditformation']);
Route::get('/formation/delete/{id}', [ControllerServices::class, 'deleteformation']);


// DETAILLES DU SERVICE DEVELOPPEMENT
Route::get('/service-devweb',[ControllerServices::class,'devweb']);
Route::get('/services-devweb',[ControllerServices::class,'devwebs']);
Route::post('/service-devweb',[ControllerServices::class,'addservicesdevweb']);
Route::get('/devweb/edit/{id}', [ControllerServices::class, 'editdevweb']);
Route::post('/devweb/edit', [ControllerServices::class, 'addeditdevweb']);
Route::get('/devweb/delete/{id}', [ControllerServices::class, 'deletedevweb']);


// DETAILLES DU SERVICE Boutique
Route::get('/service-boutique',[ControllerServices::class,'boutique']);
Route::get('/services-boutique',[ControllerServices::class,'boutiques']);
Route::post('/service-boutique',[ControllerServices::class,'addservicesboutique']);
Route::get('/boutique/edit/{id}', [ControllerServices::class, 'editboutique']);
Route::post('/boutique/edit', [ControllerServices::class, 'addeditboutique']);
Route::get('/boutique/delete/{id}', [ControllerServices::class, 'deleteboutique']);



// MODIFICATION ET SUPRESSION DE NOS EXPERTISES
Route::get('/service-odoo/edit/{id}', [ControllerServices::class, 'editservicesodoo'])->name('service.odoo.edit');
Route::post('/services/odoo/edit', [ControllerServices::class, 'addeditservicesodoo']);
Route::get('/service-odoo/delete/{id}', [ControllerServices::class, 'deleteservicesodoo'])->name('service.odoo.delete');


///
Route::post('/contacts',[ControllerContact::class,'addcontacts']);
Route::get('/about',[ControllerContact::class,'abouts']);
Route::get('/contact',[ControllerContact::class,'contacts']);

////////USERS/////

Route::get('/register',[ControllerUser::class,'register']);
Route::get('/login',[ControllerUser::class,'login']);
Route::post('/register',[ControllerUser::class,'inscription']);
Route::post('/login',[ControllerUser::class,'connexion'])->name('connexion');
Route::get('deconnexion', [ControllerUser::class,'deconnexion'])->name('deconnexion');



