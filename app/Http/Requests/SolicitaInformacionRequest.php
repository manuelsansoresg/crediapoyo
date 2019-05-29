<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitaInformacionRequest extends FormRequest
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
            'nombre_completo' => 'required',
            'rfc' => 'required',
            'homoclave' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'state' => 'required',
            'horario' => 'required',
            'aviso' => 'accepted',
        ];
    }
}
