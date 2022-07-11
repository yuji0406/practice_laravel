<?php
namespace App\HTTP\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $arameters)
    {
        return $value % 2 === 0;
    }
}
