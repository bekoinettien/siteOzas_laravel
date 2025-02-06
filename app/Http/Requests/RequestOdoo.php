<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestOdoo extends FormRequest
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
            'titre'=>'required',
            'titre'=>'min:3',
            'description'=>'required',
        ];
    }

    public function messages():array
    {
        return[
        'titre.required' => 'le titre est obligatoire',
        'titre.min'=> 'le titre doit avoir aux minimun 3 caracteres',
        'description.required'=>'la description est obligatoire'
        ];
    }
}
