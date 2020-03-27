<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssessorValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:assessors,name,'.$this->id,',id',
            'email' => 'nullable|email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ingrese el nombre',
            'name.unique' => 'El nombre ingresado ya está registrado',
            'email.email' => 'Ingrese un correo electrónico válido'
        ];
    }
}
