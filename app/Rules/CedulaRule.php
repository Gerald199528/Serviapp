<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CedulaRule implements Rule
{
    public function passes($attribute, $value)
    {
        return ctype_digit($value) && strlen($value) == 8;
    }

    public function message()
    {
        return 'El campo cédula debe tener 8 caracteres.';
    }
}
