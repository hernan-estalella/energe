<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZoneValidator extends FormRequest
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
            'name' => 'required|unique:zones,name,'.$this->id,',id',
            'm_1' => 'gt:0|lt:100',
            'm_2' => 'gt:0|lt:100',
            'm_3' => 'gt:0|lt:100',
            'm_4' => 'gt:0|lt:100',
            'm_5' => 'gt:0|lt:100',
            'm_6' => 'gt:0|lt:100',
            'm_7' => 'gt:0|lt:100',
            'm_8' => 'gt:0|lt:100',
            'm_9' => 'gt:0|lt:100',
            'm_10' => 'gt:0|lt:100',
            'm_11' => 'gt:0|lt:100',
            'm_12' => 'gt:0|lt:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ingrese el nombre',
            'name.unique' => 'El nombre ingresado ya está registrado',
            'm_1.gt' => 'Ingrese el valor de radiación de Enero',
            'm_1.lt' => 'El valor de radiación de Enero supera el máximo permitido',
            'm_2.gt' => 'Ingrese el valor de radiación de Febrero',
            'm_2.lt' => 'El valor de radiación de Febrero supera el máximo permitido',
            'm_3.gt' => 'Ingrese el valor de radiación de Marzo',
            'm_3.lt' => 'El valor de radiación de Marzo supera el máximo permitido',
            'm_4.gt' => 'Ingrese el valor de radiación de Abril',
            'm_4.lt' => 'El valor de radiación de Abril supera el máximo permitido',
            'm_5.gt' => 'Ingrese el valor de radiación de Mayo',
            'm_5.lt' => 'El valor de radiación de Mayo supera el máximo permitido',
            'm_6.gt' => 'Ingrese el valor de radiación de Junio',
            'm_6.lt' => 'El valor de radiación de Junio supera el máximo permitido',
            'm_7.gt' => 'Ingrese el valor de radiación de Julio',
            'm_7.lt' => 'El valor de radiación de Julio supera el máximo permitido',
            'm_8.gt' => 'Ingrese el valor de radiación de Agosto',
            'm_8.lt' => 'El valor de radiación de Agosto supera el máximo permitido',
            'm_9.gt' => 'Ingrese el valor de radiación de Septiembre',
            'm_9.lt' => 'El valor de radiación de Septiembre supera el máximo permitido',
            'm_10.gt' => 'Ingrese el valor de radiación de Octubre',
            'm_10.lt' => 'El valor de radiación de Octubre supera el máximo permitido',
            'm_11.gt' => 'Ingrese el valor de radiación de Noviembre',
            'm_11.lt' => 'El valor de radiación de Noviembre supera el máximo permitido',
            'm_12.gt' => 'Ingrese el valor de radiación de Diciembre',
            'm_12.lt' => 'El valor de radiación de Diciembre supera el máximo permitido'
        ];
    }
}
