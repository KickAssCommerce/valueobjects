<?php

namespace KickAss\ValueObjects\Scalar;

use KickAss\ValueObjects\ValidationException;

abstract class StringType implements TypesInterface
{
    protected $value;

    /**
     * StringType constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
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
        if (!is_string($this->value)) {
            throw new ValidationException('Value is not a string');
        }
    }

    /**
     * Get the value of the object
     *
     * @return string
     */
    public function getValue(): string
    {
        return (string)$this->value;
    }

    /**
     * Get the value of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getValue();
    }
}
