<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class telefonoVen implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate($attribute, mixed $value, Closure $fail): void
    {
        if(preg_match('/^(0412|0414|0424|0416|0426|0234|0241|0251|0235|0271|0261|0271|0281|0291)\d{7}$/', $value))
        {
            $fail('El formato de telefono no es valido');
        }
    }
}
