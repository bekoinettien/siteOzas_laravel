<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ControllerUser extends Controller
{
    public function register(){
        return view('Users/register');
    }

    public function inscription(User $users, UsersRequest $request){
        $validation =  $request->validate([
       'name'=>'required|min:3',
        'lastname'=>'required|min:3',
        'email'=>'required|unique:users|min:5',
        'password'=>'required|min:6'
       ]);

       if($validation){
        $user=new User();
        $user->is_admin=0;
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));     
        $user->save();
        return redirect()->route('connexion');
       }
      
    }

    public function login(){
        return view('Users/login');
    }

    public function connexion(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->is_admin == 3)
            {
                return redirect('/tableau');
            }else{
                return redirect()->intended('/');
            }

        }else{
            return redirect()->back()->with('error','les donnees ne sont pas conforme');
        }
    }

    public function deconnexion(){
        Session::flush();
        Auth::logout();
        return redirect()->route('connexion');

    }
}
