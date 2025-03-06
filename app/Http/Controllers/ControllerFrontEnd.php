<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestService;
use App\Models\Actualite;
use App\Models\Blog;
use App\Models\Equipe;
use App\Models\Expertise;
use App\Models\Partenaire;
use App\Models\Service;
use App\Models\Prestation;
use App\Models\Reference;
use Illuminate\Http\Request;

class ControllerFrontEnd extends Controller
{
    public function home(){
        $actualite=Actualite::all();
        $partenaires=Partenaire::all();
        //$equipe=Partenaire::all();
        $equipe=Equipe::all();
        $service=Service::all();
        return view('pages/Accueil' , compact('actualite','partenaires','equipe','service'));
    }

    ///ACTUALITES
    public function actualite(){
        return view('/pages/Actualite');
    }
    public function addactualite(Actualite $actualite , RequestService $request){
       
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('actualite', 'public');
            $actualite->image_path = $imagePath;
            
        }
        // Attribuer les valeurs et sauvegarder
        $actualite->titre = $request->titre;
        $actualite->description = $request->description;
        $actualite->save();

        return redirect()->route('home');
    
    }
    //MODIFICATION DE ACTUALITES
    public function editactualite( $id)
    {
        // Rechercher le service dans la base de données
        $actualite = Actualite::find($id);
        return view('/pages/updateActualite', compact('actualite'));

    }
    public function addeditactualite( Request $request){

        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable',
            'image' => 'image',
            'image' => 'mimes:jpeg,png,jpg,gif',
        ]);

        $actualite = Actualite::find($request->id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('actualite', 'public');
            $actualite->image_path = $imagePath;
            
        }
            // Attribuer les valeurs et sauvegarder
            $actualite->titre = $request->titre;
            $actualite->description = $request->description;
            $actualite->update();
        return redirect('/');
    }

// SUPRESSION DE ACTUALITES
    public function deleteactualite($id)
    {
        // Rechercher le service dans la base de données
        $actualite = Actualite::find($id);

        if (!$actualite) {
            return redirect()->back()->with('error', 'Service introuvable.');
        }

        // Supprimer l'image associée au service
        if ($actualite->path_image && file_exists(storage_path('app/public/' . $actualite->path_image))) {
            unlink(storage_path('app/public/' . $actualite->path_image));
        }

        // Supprimer le service de la base de données
        $actualite->delete();

        return redirect()->back()->with('success', 'Service supprimé avec succès.');
    }   



///PARTENAIRE
public function partenaire(){
    return view('/pages/partenaire');
}
public function addpartenaire(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('partenaires', 'public');
        
        $partenaire = new Partenaire;
        $partenaire->image_path = $imagePath;
        $partenaire->save();
    }

    return redirect()->route('dashlistepartenaire')->with('success', 'Partenaire ajouté avec succès!');
}

//MODIFICATION DE  partenaire 

public function editpartenaire( $id)
{
    // Rechercher le service dans la base de données
    $partenaire = Partenaire::find($id);
    return view('/pages/updatePartenaire', compact('partenaire'));

}
public function addeditpartenaire( Request $request){

    $request->validate([
        
        'image' => 'nullable',
        'image' => 'image',
        'image' => 'mimes:jpeg,png,jpg,gif',
    ]);

    $partenaire = Partenaire::find($request->id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('partenaires', 'public');
        $partenaire->image_path = $imagePath;
        
    }
        // Attribuer les valeurs et sauvegarder
        $partenaire->update();
    return redirect()->route('dashlistepartenaire');
}

// SUPRESSION DE partenaire
public function deletepartenaire($id)
{
    // Rechercher le service dans la base de données
    $partenaire = Partenaire::find($id);

    if (!$partenaire) {
        return redirect()->back()->with('error', 'Service introuvable.');
    }

    // Supprimer l'image associée au service
    if ($partenaire->path_image && file_exists(storage_path('app/public/' . $partenaire->path_image))) {
        unlink(storage_path('app/public/' . $partenaire->path_image));
    }

    // Supprimer le service de la base de données
    $partenaire->delete();

    return redirect()->back()->with('success', 'Service supprimé avec succès.');
}   


///EQUIPES
public function equipe(){
    return view('/pages/Equipe');
}
public function addequipe( Request $request){
   
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'nom' => 'required|string',
        'fonction' => 'required|string',

    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('equipe', 'public');
        
        $equipe = new Equipe;
        $equipe->nom  = $request->input('nom');;
        $equipe -> fonction = $request->input('fonction');;
        $equipe->path_image = $imagePath;
        $equipe->save();
    }

    return redirect()->route('home');

}
//MODIFICATION DE ACTUALITES
public function editequipe( $id)
{
    // Rechercher le service dans la base de données
    $equipe = Equipe::find($id);
    return view('/pages/updateEquipe', compact('equipe'));

}
public function addeditequipe( Request $request){

    $request->validate([
        'nom' => 'required|string|max:255',
        'fonction' => 'required|string',
        'image' => 'nullable',
        'image' => 'image',
        'image' => 'mimes:jpeg,png,jpg,gif',
    ]);

    $equipe = Equipe::find($request->id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('equipe', 'public');
        $equipe->path_image = $imagePath;
        
    }
        // Attribuer les valeurs et sauvegarder
        $equipe->nom = $request->nom;
        $equipe->fonction = $request->fonction;
        $equipe->update();
    return redirect('/');
}

// SUPRESSION DE ACTUALITES
public function deleteequipe($id)
{
    // Rechercher le service dans la base de données
    $equipe = Equipe::find($id);

    if (!$equipe) {
        return redirect()->back()->with('error', 'Service introuvable.');
    }

    // Supprimer l'image associée au service
    if ($equipe->path_image && file_exists(storage_path('app/public/' . $equipe->path_image))) {
        unlink(storage_path('app/public/' . $equipe->path_image));
    }

    // Supprimer le service de la base de données
    $equipe->delete();

    return redirect()->back()->with('success', 'Service supprimé avec succès.');
}   





    ///AJOUT DES BLOGS
    public function blog(){
        return view('/pages/Blog');
    }

    public function listeblog(){
        $blog=Blog::all();
        return view('/pages/ListeBlog' , compact('blog'));
    }
    public function addblog(Blog $blog , RequestService $request){
       
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('blog', 'public');
                    $blog->image_path = $imagePath;
                    
                }
                // Attribuer les valeurs et sauvegarder
                $blog->titre = $request->titre;
                $blog->description = $request->description;
                $blog->save();
    
                return redirect()-> route('dashlisteblog');
            
    }

    //MODIFICATION DE BLOG
    public function editblog( $id)
{
    // Rechercher le service dans la base de données
    $blog = Blog::find($id);
    return view('/pages/updateBlog', compact('blog'));

}
public function addeditblog( Request $request){

    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable',
        'image' => 'image',
        'image' => 'mimes:jpeg,png,jpg,gif',
    ]);

    $blog = Blog::find($request->id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('blog', 'public');
        $blog->image_path = $imagePath;
        
    }
        // Attribuer les valeurs et sauvegarder
        $blog->titre = $request->titre;
        $blog->description = $request->description;
        $blog->update();
       return redirect('/blogs');
}

// SUPRESSION DE BLOG
public function deleteblog($id)
{
    // Rechercher le service dans la base de données
    $blog = Blog::find($id);

    if (!$blog) {
        return redirect()->back()->with('error', 'Service introuvable.');
    }

    // Supprimer l'image associée au service
    if ($blog->path_image && file_exists(storage_path('app/public/' . $blog->path_image))) {
        unlink(storage_path('app/public/' . $blog->path_image));
    }

    // Supprimer le service de la base de données
    $blog->delete();

    return redirect()->back()->with('success', 'Service supprimé avec succès.');
}



///AJOUT DES REFERENCE
public function reference(){
    return view('/pages/Reference');
}

public function listereference(){
    $reference=Reference::all();
    return view('/pages/ListeReference' , compact('reference'));
}
public function addreference(Reference $reference , RequestService $request){
   
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('reference', 'public');
                $reference->image_path = $imagePath;
                
            }
            // Attribuer les valeurs et sauvegarder
            $reference->titre = $request->titre;
            $reference->description = $request->description;
            $reference->save();

            return redirect()->route('dashlistereference');
        
}

//MODIFICATION DE BLOG
public function editreference( $id)
{
// Rechercher le service dans la base de données
$reference = Reference::find($id);
return view('/pages/updateReference', compact('reference'));

}
public function addeditreference( Request $request){

$request->validate([
    'titre' => 'required|string|max:255',
    'description' => 'required|string',
    'image' => 'nullable',
    'image' => 'image',
    'image' => 'mimes:jpeg,png,jpg,gif',
]);

$reference = Reference::find($request->id);

if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->store('reference', 'public');
    $reference->image_path = $imagePath;
    
}
    // Attribuer les valeurs et sauvegarder
    $reference->titre = $request->titre;
    $reference->description = $request->description;
    $reference->update();
   return redirect('/references');
}

// SUPRESSION DE BLOG
public function deletereference($id)
{
// Rechercher le service dans la base de données
$reference = Reference::find($id);

if (!$reference) {
    return redirect()->back()->with('error', 'Service introuvable.');
}

// Supprimer l'image associée au service
if ($reference->path_image && file_exists(storage_path('app/public/' . $reference->path_image))) {
    unlink(storage_path('app/public/' . $reference->path_image));
}

// Supprimer le service de la base de données
$reference->delete();

return redirect()->back()->with('success', 'Service supprimé avec succès.');
}


///AJOUT DES PRESTATION
public function prestation(){
    return view('/pages/Prestation');
}

public function listeprestation(){
    $prestation=Prestation::all();
    return view('/pages/ListePrestation' , compact('prestation'));
}
public function addprestation(Prestation $prestation , RequestService $request){
   
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('prestation', 'public');
                $prestation->image_path = $imagePath;
                
            }
            // Attribuer les valeurs et sauvegarder
            $prestation->titre = $request->titre;
            $prestation->description = $request->description;
            $prestation->save();

            return redirect()->route('dashlisteprestation');
        
}

//MODIFICATION DE PRESTATION
public function editprestation( $id)
{
// Rechercher le service dans la base de données
$prestation = Prestation::find($id);
return view('/pages/updatePrestation', compact('prestation'));

}
public function addeditprestation( Request $request){

$request->validate([
    'titre' => 'required|string|max:255',
    'description' => 'required|string',
    'image' => 'nullable',
    'image' => 'image',
    'image' => 'mimes:jpeg,png,jpg,gif',
]);

$prestation = Prestation::find($request->id);

if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->store('prestation', 'public');
    $prestation->image_path = $imagePath;
    
}
    // Attribuer les valeurs et sauvegarder
    $prestation->titre = $request->titre;
    $prestation->description = $request->description;
    $prestation->update();
   return redirect('/prestations');
}

// SUPRESSION DE BLOG
public function deleteprestation($id)
{
// Rechercher le service dans la base de données
$prestation = Prestation::find($id);

if (!$prestation) {
    return redirect()->back()->with('error', 'Service introuvable.');
}

// Supprimer l'image associée au service
if ($prestation->path_image && file_exists(storage_path('app/public/' . $prestation->path_image))) {
    unlink(storage_path('app/public/' . $prestation->path_image));
}

// Supprimer le service de la base de données
$prestation->delete();

return redirect()->back()->with('success', 'Service supprimé avec succès.');
}
////DASHBOARD
public function dash(){
    return view('admin.layouts.dashboard');
}
public function dashact(){
    $actualite=Actualite::all();
    return view('admin.pages.listeActualiteAdmin', compact('actualite'));
}
public function dashlistact(){
    $service = Service::all();
    return view('admin.pages.listeServiceAdmin', compact('service'));
}
public function dashlisteblog(){
    $blog = Blog::all();
    return view('admin.pages.listeBlogAdmin', compact('blog'));
}
public function dashlisteprestation(){
    $prestation=Prestation::all();
    return view('admin.pages.listePrestationAdmin', compact('prestation'));
}
public function dashlistereference(){
    $reference=Reference::all();
    return view('admin.pages.listeReferenceAdmin', compact('reference'));
}
public function dashlistepartenaire(){
    $partenaire=Partenaire::all();
    return view('admin.pages.listePartenaireAdmin', compact('partenaire'));
}

public function dashlisteequipe(){
    $equipe=Equipe::all();
    return view('admin.pages.listeEquipeAdmin', compact('equipe'));
}

public function dashlisteexpertise(){
    $expertise=Expertise::all();
    return view('admin.pages.listeExpertiseAdmin', compact('expertise'));
}




public function show($id)
{
    // Récupérer le service par son ID
    $service = Service::findOrFail($id);
   // $services = Service::all();

    // Retourner la vue avec les données du service
    return view('admin.pages.listeService', compact('service'));
}



// experises

public function expertise(){
    return view('/pages/expertise');
}

public function listeexpertise(){
    $expertise = Expertise::all();
    return view('/pages/ListeServices',compact('expertise'));
}
public function addexpertise( Request $request){
   
    $request->validate([
       
        'description' => 'required|string',

    ]);

        $expertise = new Expertise;
        $expertise -> description = $request->input('description');;
        
        $expertise->save();

    return redirect()->route('home');

}
//MODIFICATION DE EXPERTISE
public function editexpertise( $id)
{
    // Rechercher le service dans la base de données
    $expertise = Expertise::find($id);
    return view('/pages/updateExpertise', compact('expertise'));

}
public function addeditexpertise( Request $request){

    $request->validate([
        
        'description' => 'required|string',
        
    ]);

    $expertise = Expertise::find($request->id);

        // Attribuer les valeurs et sauvegarder
       
        $expertise->description = $request->description;
        $expertise->update();
    return redirect('/');
}

// SUPRESSION DE ACTUALITES
public function deleteexpertise($id)
{
    // Rechercher le service dans la base de données
    $expertise = Expertise::find($id);

    if (!$expertise) {
        return redirect()->back()->with('error', 'Service introuvable.');
    }

    // Supprimer le service de la base de données
    $expertise->delete();

    return redirect()->back()->with('success', 'Service supprimé avec succès.');
}   






}