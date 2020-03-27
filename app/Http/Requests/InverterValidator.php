<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InverterValidator extends FormRequest
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
            'name' => 'required|unique:inverters,name,'.$this->id,',id',
            'min_panels' => 'gt:0|lt:max_panels',
            'max_panels' => 'gt:min_panels'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ingrese el nombre',
            'name.unique' => 'El nombre ingresado ya está registrado',
            'min_panels.gt' => 'Ingrese el valor mínimo de paneles',
            'min_panels.lt' => 'El valor mínimo de paneles no puede ser mayor que el valor máximo',
            'max_panels.gt' => 'El valor máximo de paneles no puede ser menor que el valor mínimo'
        ];
    }
}
