<?php

namespace KickAss\ValueObjects\Person;

use KickAss\ValueObjects\Scalar\StringType;
use KickAss\ValueObjects\ValidationException;

class EmailValue extends StringType
{
    /**
     * @inheritdoc
     */
    protected function validateSetValue()
    {
        parent::validateSetValue(); // validate for string properties

        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            throw new ValidationException('Value is not a valid email address');
        }
    }
}