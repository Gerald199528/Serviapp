<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CarnetRule implements Rule
{
    public function passes($attribute, $value)
    {
        return ctype_digit($value) && strlen($value) == 10;
    }

    public function message()
    {
        return 'Estimado usuario este campo debe tener 10 caracteres.';
    }
}
