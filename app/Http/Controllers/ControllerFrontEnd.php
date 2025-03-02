<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestService;
use App\Models\Actualite;
use App\Models\Blog;
use App\Models\Prestation;
use App\Models\Reference;
use Illuminate\Http\Request;

class ControllerFrontEnd extends Controller
{
    public function home(){
        $actualite=Actualite::all();
        return view('pages/Accueil' , compact('actualite'));
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
    //MODIFICATION DE BLOG
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

// SUPRESSION DE BLOG
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
    
                return view('/pages/Accueil');
            
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

            return view('/pages/Accueil');
        
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

            return view('/pages/Accueil');
        
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



}
