<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarArchivo extends FormRequest
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
            'ruc' => 'required|min:11|max:11',
            'fecha' => 'required|date',
            'serie' => 'alpha_num|required|min:4|max:4',
            'numero' => 'alpha_num|required|min:8|max:8',
            'importe' => 'numeric|required',
            'archivo' => 'required|array',
            'archivo.*' => 'required|file'
        ];
    }
/*
    public function messages()
    {
        return [
            'required' => 'El campo :: es obligatorio'
        ];
    }*/
}
