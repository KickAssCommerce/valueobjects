<?php

namespace KickAss\ValueObjects\Geo\Country;

use KickAss\ValueObjects\Scalar\StringType;
use KickAss\ValueObjects\ValidationException;

class CountryIso2Value extends StringType
{
    /**
     * @inheritdoc
     */
    protected function validateSetValue()
    {
        parent::validateSetValue(); // validate for string properties

        if (strlen($this->value) !== 2) {
            throw new ValidationException('An ISO2 value should be 2 characters long');
        }
    }
}
