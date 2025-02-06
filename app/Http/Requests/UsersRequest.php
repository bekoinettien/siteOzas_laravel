<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'email'=>'email',
            'email'=>'unique:users',
            'password'=>'required',
            'password'=>'min:8',
        ];
    }

    public function messages():array
    {
      return([
        'name.required'=>'le nom est obligatoire',
        'lastname.required'=>'le prenom esty obligatoire',
        'email.required'=> 'email obligatoire',
        'email.email'=>'le formation dois avoir @gmail.com',
        'email.unique'=>'ce mail est deja occupe par un utlisateur',
        'password.required'=>'le mot de passe est obligatoire',
        'password.min'=>'le mot de passe doit avoir 8 caracteres'
      ]);  
    }
}
