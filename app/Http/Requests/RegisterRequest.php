<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PasswordRule;
class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido' => 'required|min:3',
            'email' => 'required|email|unique:users',
            "password" => ["required", "string", new PasswordRule],
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'El nombre solo puede contener letras y espacios.',
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'Por favor, introduce una dirección de correo electrónico válido.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'same' => 'Contraseña no Coiciden',

        ];
    }
}
