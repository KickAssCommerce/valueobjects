<?php

namespace KickAss\ValueObjects\Scalar;

use KickAss\ValueObjects\ValidationException;

class NullType implements TypesInterface
{
    protected $value;

    /**
     * NullType constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
        $this->validateSetValue();
    }

    /**
     * Validate for basic string properties
     *
     * @throws \KickAss\ValueObjects\ValidationException
     */
    protected function validateSetValue()
    {
        if (!is_null($this->value)) {
            throw new ValidationException('Value is not null');
        }
    }

    /**
     * Get the value of the object
     *
     * @return null
     */
    public function getValue()
    {
        return $this->value;
    }
}
