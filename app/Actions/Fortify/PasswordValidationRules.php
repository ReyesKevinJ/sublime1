<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;
// Require at least 10 characters...
(new Password)->length(10);

// Require at least one uppercase character...
(new Password)->requireUppercase();

// Require at least one numeric character...
(new Password)->requireNumeric();

// Require at least one special character...
(new Password)->requireSpecialCharacter();

trait PasswordValidationRules
{

    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        return ['required', 'string', (new Password)->length(8)->requireUppercase()->requireNumeric()->requireSpecialCharacter(), 'confirmed'];
    }
}
