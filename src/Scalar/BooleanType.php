<?php

namespace KickAss\ValueObjects\Scalar;

use KickAss\ValueObjects\ValidationException;

abstract class BooleanType implements TypesInterface
{
    protected $value;

    /**
     * BooleanType constructor.
     *
     * @param bool $value
     */
    public function __construct(bool $value)
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
        if (!is_float($this->value)) {
            throw new ValidationException('Value is not a boolean');
        }
    }

    /**
     * Get the value of the object
     *
     * @return bool
     */
    public function getValue(): bool
    {
        return (bool)$this->value;
    }
}
