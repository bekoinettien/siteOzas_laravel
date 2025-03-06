<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestContact;
use App\Models\Contact;
use App\Models\Equipe;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class ControllerContact extends Controller
{
    public function contacts(){
        return view('/pages/Contact');
    }

    public function addcontacts(Contact $contact, RequestContact $request){
        $contact->nom =$request->nom;
        $contact->email =$request->email;
        $contact->telephone =$request->telephone;
        $contact->message =$request->message;
        $contact->save();
        return redirect('/');
        
    }

    // section about

    public function abouts(){
        $partenaires=Partenaire::all();
        //$equipe=Partenaire::all();
        $equipe=Equipe::all();
        return view('/pages/About',compact('partenaires','equipe'));
    }
}
