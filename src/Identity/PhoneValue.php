<?php

namespace KickAss\ValueObjects\Identity;

use KickAss\ValueObjects\Scalar\StringType;
use KickAss\ValueObjects\ValidationException;

class PhoneValue extends StringType
{
    /**
     * @inheritdoc
     */
    protected function validateSetValue()
    {
        parent::validateSetValue(); // validate for string properties

        if (strlen($this->value)  < 10) {
            throw new ValidationException('Phone number should be 10 characters or longer');
        }
    }
}
