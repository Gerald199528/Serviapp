<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class TelefonoRule implements Rule
{
    public function passes($attribute, $value)
    {
        return ctype_digit($value) && strlen($value) == 11;
    }

    public function message()
    {
        return 'Estimado usuario  te indicamos que todos los campos Telefono debe contener exactamente 11 números.';
    }
}
