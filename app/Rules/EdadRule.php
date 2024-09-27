<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EdadRule implements Rule
{

        public function passes($attribute, $value)
        {
            // Asegura que el valor sea un número y sea mayor o igual a 18.
            return is_numeric($value) && $value >= 18;
        }

        public function message()
        {
            return 'Edad requerida: 18 años.';
        }
    }
