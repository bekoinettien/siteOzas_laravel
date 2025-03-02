<?php

use App\Http\Controllers\ControllerContact;
use App\Http\Controllers\ControllerFrontEnd;
use App\Http\Controllers\ControllerServices;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/',[ControllerFrontEnd::class,'home'])->name('home');
Route::post('/news',[ControllerFrontEnd::class,'addactualite']);
Route::post('/actualite/add', [ControllerFrontEnd::class, 'addeditactualite'])->name('actualite.add');


Route::get('/search', [SearchController::class, 'search'])->name('search');

// ENTREGISTREMENT DES SERVICES

Route::get('/services',[ControllerServices::class,'listeservices'])->name('serviceliste');
Route::post('/service',[ControllerServices::class,'addservices']);
Route::post('/services/odoo/edit', [ControllerServices::class, 'addeditservicesodoo'])->name('service.add');


// ENTREGISTREMENT DES BLOGS

Route::get('/blogs',[ControllerFrontEnd::class,'listeblog'])->name('blogliste');
Route::post('/blog',[ControllerFrontEnd::class,'addblog']);
Route::post('/blog/add', [ControllerFrontEnd::class, 'addeditblog'])->name('blog.add');

// ENTREGISTREMENT DES REFERENCES

Route::get('/references',[ControllerFrontEnd::class,'listereference'])->name('blogreference');
Route::post('/reference',[ControllerFrontEnd::class,'addreference']);
Route::post('/reference/add', [ControllerFrontEnd::class, 'addeditreference'])->name('reference.add');

// ENTREGISTREMENT DES PRESTATIONS

Route::get('/prestations',[ControllerFrontEnd::class,'listeprestation'])->name('presta');
Route::post('/prestation',[ControllerFrontEnd::class,'addprestation']);
Route::post('/prestation/add', [ControllerFrontEnd::class, 'addeditprestation'])->name('prestation.add');

// DETAILLES DU SERVICE ODOO
Route::get('/services-odoo',[ControllerServices::class,'description']);
Route::post('/service-odoo',[ControllerServices::class,'addservicesodoo'])->name('service.store');
Route::post('/edit', [ControllerServices::class, 'addeditodoo']);

// DETAILLES DU SERVICE BIGDATA

Route::get('/services-bigdata',[ControllerServices::class,'descriptions']);
Route::post('/service-bigdata',[ControllerServices::class,'addservicesbigdata']);
Route::post('/bigdata/edit', [ControllerServices::class, 'addeditbigdata']);

// DETAILLES DU SERVICE CYBER
Route::get('/services-cyber',[ControllerServices::class,'cybers']);
Route::post('/service-cyber',[ControllerServices::class,'addservicescyber']);
Route::post('/cyber/edit', [ControllerServices::class, 'addeditcyber']);

// DETAILLES DU SERVICE Formation
Route::get('/services-formation',[ControllerServices::class,'formations']);
Route::post('/service-formation',[ControllerServices::class,'addservicesformation']);
Route::post('/formation/edit', [ControllerServices::class, 'addeditformation']);

// DETAILLES DU SERVICE DEVELOPPEMENT
Route::get('/services-devweb',[ControllerServices::class,'devwebs']);
Route::post('/service-devweb',[ControllerServices::class,'addservicesdevweb']);
Route::post('/devweb/edit', [ControllerServices::class, 'addeditdevweb']);


// DETAILLES DU SERVICE Boutique
Route::get('/services-boutique',[ControllerServices::class,'boutiques']);
Route::post('/service-boutique',[ControllerServices::class,'addservicesboutique']);
Route::post('/boutique/edit', [ControllerServices::class, 'addeditboutique']);


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


Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/tableau', function () {
        return view('Layout/headadmin');
    });
    Route::get('/service-odoo',[ControllerServices::class,'odoo'])->name('service.create');
    Route::get('/service',[ControllerServices::class,'services']);
    Route::get('/service-odoo/edit/{id}', [ControllerServices::class, 'editservicesodoo'])->name('service.odoo.edit');
    Route::get('/service-odoo/delete/{id}', [ControllerServices::class, 'deleteservicesodoo'])->name('service.odoo.delete');
    Route::get('/odoo/edit/{id}', [ControllerServices::class, 'editodoo']);
    Route::get('/odoo/delete/{id}', [ControllerServices::class, 'deleteodoo']);

    Route::get('/bigdata/delete/{id}', [ControllerServices::class, 'deletebigdata']);
    Route::get('/service-bigdata',[ControllerServices::class,'bigdata']);
    Route::get('/bigdata/edit/{id}', [ControllerServices::class, 'editbigdata']);

    Route::get('/blog/edit/{id}', [ControllerFrontEnd::class, 'editblog']);
    Route::get('/blog/delete/{id}', [ControllerFrontEnd::class, 'deleteblog']);
    Route::get('/blog',[ControllerFrontEnd::class,'blog']);

    Route::get('/reference/edit/{id}', [ControllerFrontEnd::class, 'editreference']);
    Route::get('/reference/delete/{id}', [ControllerFrontEnd::class, 'deletereference']);
    Route::get('/reference',[ControllerFrontEnd::class,'reference']);

    Route::get('/prestation',[ControllerFrontEnd::class,'prestation']);
    Route::get('/prestation/edit/{id}', [ControllerFrontEnd::class, 'editprestation']);
    Route::get('/prestation/delete/{id}', [ControllerFrontEnd::class, 'deleteprestation']);

    Route::get('/service-cyber',[ControllerServices::class,'cyber']);
    Route::get('/cyber/delete/{id}', [ControllerServices::class, 'deletecyber']);
    Route::get('/cyber/edit/{id}', [ControllerServices::class, 'editcyber']);

    Route::get('/formation/delete/{id}', [ControllerServices::class, 'deleteformation']);
    Route::get('/service-formation',[ControllerServices::class,'formation']);
    Route::get('/formation/edit/{id}', [ControllerServices::class, 'editformation']);

    Route::get('/devweb/delete/{id}', [ControllerServices::class, 'deletedevweb']);
    Route::get('/service-devweb',[ControllerServices::class,'devweb']);
    Route::get('/devweb/edit/{id}', [ControllerServices::class, 'editdevweb']);

    Route::get('/boutique/delete/{id}', [ControllerServices::class, 'deleteboutique']);
    Route::get('/service-boutique',[ControllerServices::class,'boutique']);
    Route::get('/boutique/edit/{id}', [ControllerServices::class, 'editboutique']);
    

    Route::get('/news',[ControllerFrontEnd::class,'actualite']);
    Route::get('/actualite/edit/{id}', [ControllerFrontEnd::class, 'editactualite']);
    Route::get('/actualite/delete/{id}', [ControllerFrontEnd::class, 'deleteactualite']);
   
  
    //////////////////
    

});

