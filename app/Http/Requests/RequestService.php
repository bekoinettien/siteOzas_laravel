<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestService extends FormRequest
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
            'description'=>'required',
            'image'=>'required'
        ];
    }

    public function messages():array
    {
        return[
            'titre.required'=>'le titre est obligatoire',
            'description.required'=>'la description est obligatoire',
            'image.required'=>'l \' image est obligatoire'
        ];
    }
}
