<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContact extends FormRequest
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
            'nom'=>'required',
            'nom'=>'min:3',
            'email'=>'required',
            'telephone'=>'required',
            'message'=>'required',
            'message'=>'min:6'
        ];
    }
    public function messages(): array
    {
        return[
            'nom.required'=>'Le nom et prenoms sont obligatoires',
            'nom.min'=>'Le nom et prenoms doivent depasser 3 Caractères',
            'email.required'=>'Le email est obligatoire',
            'telephone.required'=>'Le telephone est obligatoire',
            'message.required'=>'Le message est obligatoire',
            'message.min'=>'Le message doit depassé 6 Caractère',
        ];
    }
}
