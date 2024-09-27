<?php

namespace App\Http\Requests\Datos;
use App\Rules\CedulaRule;
use App\Rules\TelefonoRule;
use App\Rules\EdadRule;
use App\Rules\CarnetRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

            'cedula'=>[ new CedulaRule],
            'telefono' => [ new TelefonoRule],
            'edad' => [ new EdadRule],
            'carnet' => [ new CarnetRule],


        ];



    }
}
