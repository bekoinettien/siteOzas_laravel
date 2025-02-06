<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestOdoo;
use App\Http\Requests\RequestService;
use App\Models\Bigdata;
use App\Models\Boutique;
use App\Models\Cyber;
use App\Models\Developpement;
use App\Models\Formation;
use App\Models\Odoo;
use App\Models\Service;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



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

    // public function odoo(){
    //     return view('/Layout/headadmin');
    // }

    // DEBUT DETAILS

    ////////////////////////////////////////////////////

    public function odoo(){
        return view('/details/Odoo');
    }

    public function description(){
        $service_odoo=Odoo::all();
        return view('/details/AfficheOdoo' , compact('service_odoo'));

    }

    public function addservicesodoo(Odoo $odoo_service , RequestOdoo $request){
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service_odoo', 'public');
            $odoo_service->path_image = $imagePath;    
        }
        $odoo_service->titre=$request->titre;
        $odoo_service->description=$request->description;
        $odoo_service->save();
        return view('/pages/Accueil');
    }

    public function editodoo($id){
        $service_odoo=Odoo::find($id);
        return view('details/updateodoo', compact('service_odoo'));

    }
    
    public function addeditodoo(RequestOdoo $request){
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image',
            'image' => 'mimes:jpeg,png,jpg,gif',
        ]);
    
        $odoo_service = Odoo::find($request->id);
     
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service_odoo', 'public');
            $odoo_service->path_image = $imagePath;    
        }
            // Attribuer les valeurs et sauvegarder
            $odoo_service->titre = $request->titre;
            $odoo_service->description = $request->description;
            $odoo_service->update();
            return redirect('/services-odoo');

    }
    ///////////////////////////////////////////////////

     public function bigdata(){
        return view('/details/Bigdata');
    }

    public function descriptions(){
        $service_bigdata=Bigdata::all();
        return view('/details/AfficheBigdata' , compact('service_bigdata'));

    }

    public function addservicesbigdata(Bigdata $odoo_bigdata , RequestOdoo $request){
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service_bigdata', 'public');
            $odoo_bigdata->path_image = $imagePath;    
        }
        $odoo_bigdata->titre=$request->titre;
        $odoo_bigdata->description=$request->description;
        $odoo_bigdata->save();
        return view('/pages/Accueil');
    }


    public function editbigdata($id){
        $service_bigdata=Bigdata::find($id);
        return view('details/updatebigdata', compact('service_bigdata'));

    }
    
    public function addeditbigdata(RequestOdoo $request){
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image',
            'image' => 'mimes:jpeg,png,jpg,gif',
        ]);
    
        $bigdata_service = Bigdata::find($request->id);
     
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service_bigdata', 'public');
            $bigdata_service->path_image = $imagePath;    
        }
            // Attribuer les valeurs et sauvegarder
            $bigdata_service->titre = $request->titre;
            $bigdata_service->description = $request->description;
            $bigdata_service->update();
            return redirect('/services-bigdata');

    }
    ///////////////////////////////////////////////////

    public function devweb(){
        return view('/details/Devweb');
    }

    public function devwebs(){
        $service_devweb=Developpement::all();
        return view('/details/AfficheDevweb' , compact('service_devweb'));

    }

    public function addservicesdevweb(Developpement $odoo_devweb , RequestOdoo $request){
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service_devweb', 'public');
            $odoo_devweb->path_image = $imagePath;    
        }
        $odoo_devweb->titre=$request->titre;
        $odoo_devweb->description=$request->description;
        $odoo_devweb->save();
        return view('/pages/Accueil');
    }

    public function editdevweb($id){
        $service_devweb=Developpement::find($id);
        return view('details/updatedevweb', compact('service_devweb'));

    }
    
    public function addeditdevweb(RequestOdoo $request){
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image',
            'image' => 'mimes:jpeg,png,jpg,gif',
        ]);
    
        $devweb_service = Developpement::find($request->id);
     
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service_devweb', 'public');
            $devweb_service->path_image = $imagePath;    
        }
            // Attribuer les valeurs et sauvegarder
            $devweb_service->titre = $request->titre;
            $devweb_service->description = $request->description;
            $devweb_service->update();
            return redirect('/services-devweb');

    }
///////////////////////////////////////////////////

public function cyber(){
    return view('/details/Cyber');
}

public function cybers(){
    $service_cyber=Cyber::all();
    return view('/details/AfficheCyber' , compact('service_cyber'));

}

public function addservicescyber(Cyber $odoo_cyber , RequestOdoo $request){
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('service_cyber', 'public');
        $odoo_cyber->path_image = $imagePath;    
    }
    $odoo_cyber->titre=$request->titre;
    $odoo_cyber->description=$request->description;
    $odoo_cyber->save();
    return view('/pages/Accueil');
}

public function editcyber($id){
    $service_cyber=Cyber::find($id);
    return view('details/updatecyber', compact('service_cyber'));

}

public function addeditcyber(RequestOdoo $request){
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'image',
        'image' => 'mimes:jpeg,png,jpg,gif',
    ]);

    $cyber_service = Cyber::find($request->id);
 
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('service_cyber', 'public');
        $cyber_service->path_image = $imagePath;    
    }
        // Attribuer les valeurs et sauvegarder
        $cyber_service->titre = $request->titre;
        $cyber_service->description = $request->description;
        $cyber_service->update();
        return redirect('/services-cyber');

}
/////////////////////////////////////////////

public function formation(){
    return view('/details/Formation');
}

public function formations(){
    $service_formation=Formation::all();
    return view('/details/AfficheFormation' , compact('service_formation'));

}

public function addservicesformation(Formation $odoo_formation , RequestOdoo $request){
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('service_formation', 'public');
        $odoo_formation->path_image = $imagePath;    
    }
    $odoo_formation->titre=$request->titre;
    $odoo_formation->description=$request->description;
    $odoo_formation->save();
    return view('/pages/Accueil');
}

public function editformation($id){
    $service_formation=Formation::find($id);
    return view('details/updateformation', compact('service_formation'));

}

public function addeditformation(RequestOdoo $request){
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'image',
        'image' => 'mimes:jpeg,png,jpg,gif',
    ]);

    $formation_service = Formation::find($request->id);
 
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('service_formation', 'public');
        $formation_service->path_image = $imagePath;    
    }
        // Attribuer les valeurs et sauvegarder
        $formation_service->titre = $request->titre;
        $formation_service->description = $request->description;
        $formation_service->update();
        return redirect('/services-formation');

}

//////////////////////////////////////////////////////////

public function boutique(){
    return view('/details/Boutique');
}

public function boutiques(){
    $service_boutique=Boutique::all();
    return view('/details/AfficheBoutique' , compact('service_boutique'));

}

public function addservicesboutique(Boutique $odoo_boutique , RequestOdoo $request){
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('service_boutique', 'public');
        $odoo_boutique->path_image = $imagePath;    
    }
    $odoo_boutique->titre=$request->titre;
    $odoo_boutique->description=$request->description;
    $odoo_boutique->save();
    return view('/pages/Accueil');
}

public function editboutique($id){
    $service_boutique=Boutique::find($id);
    return view('details/updateboutique', compact('service_boutique'));

}

public function addeditboutique(RequestOdoo $request){
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'image',
        'image' => 'mimes:jpeg,png,jpg,gif',
    ]);

    $boutique_service = Boutique::find($request->id);
 
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('service_boutique', 'public');
        $boutique_service->path_image = $imagePath;    
    }
        // Attribuer les valeurs et sauvegarder
        $boutique_service->titre = $request->titre;
        $boutique_service->description = $request->description;
        $boutique_service->update();
        return redirect('/services-boutique');

}

// FIN DETAILS

//MODIFICATION NOTRE EXPERTISES
    public function editservicesodoo( $id)
{
    // Rechercher le service dans la base de données
    $service = Service::find($id);
    return view('/pages/update', compact('service'));

}
public function addeditservicesodoo( Request $request){

    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable',
        'image' => 'image',
        'image' => 'mimes:jpeg,png,jpg,gif',
    ]);

    $service = Service::find($request->id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('service', 'public');
        $service->image_path = $imagePath;
        
    }
        // Attribuer les valeurs et sauvegarder
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->update();
       return redirect('/services');
}

// FIN DE NOTRE EXPERTISES

// SUPRESSION DE NOS EXPERTISES
public function deleteservicesodoo($id)
{
    // Rechercher le service dans la base de données
    $service = Service::find($id);

    if (!$service) {
        return redirect()->back()->with('error', 'Service introuvable.');
    }

    // Supprimer l'image associée au service
    if ($service->path_image && file_exists(storage_path('app/public/' . $service->path_image))) {
        unlink(storage_path('app/public/' . $service->path_image));
    }

    // Supprimer le service de la base de données
    $service->delete();

    return redirect()->back()->with('success', 'Service supprimé avec succès.');
}

// FIN EXPERTISES

}
