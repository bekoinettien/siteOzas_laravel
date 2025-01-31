<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestContact;
use App\Models\Contact;
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
        return view('/pages/About');
    }
}
