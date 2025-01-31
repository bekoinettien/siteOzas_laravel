<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ControllerServices extends Controller
{
    public function services(){
        return view('/pages/Services');
    }

    public function listeservices(){
        $service=Service::all();
        return view('/pages/ListeServices' , compact('service'));
    }
    public function addservices(Service $service , RequestService $request){
       
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('service', 'public');
                    $service->image_path = $imagePath;
                    
                }
                // Attribuer les valeurs et sauvegarder
                $service->titre = $request->titre;
                $service->description = $request->description;
                $service->save();
    
                return view('/pages/Accueil');
            
    }
}
