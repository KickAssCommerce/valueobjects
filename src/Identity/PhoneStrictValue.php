<?php

namespace KickAss\ValueObjects\Identity;

use KickAss\ValueObjects\Scalar\StringType;
use KickAss\ValueObjects\ValidationException;

class PhoneStrictValue extends PhoneValue
{
    /**
     * @inheritdoc
     */
    protected function validateSetValue()
    {
        parent::validateSetValue(); // validate for string properties

        if (preg_match('/[^\d\-\+\(\)\s]+/', $this->value)) {
            throw new ValidationException('Phone number can only contain +, space, (, ), -, numbers');
        }
    }
}
