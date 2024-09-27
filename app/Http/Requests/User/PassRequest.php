<?php

namespace App\Http\Requests\User;
use App\Rules\PasswordRule;
use Illuminate\Foundation\Http\FormRequest;

class PassRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            "password" => ["required", "string", new PasswordRule],
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [

            'same' => 'Contraseña no Coiciden',

        ];
    }
}
