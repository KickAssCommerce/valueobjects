<?php

namespace KickAss\ValueObjects\Scalar;

use KickAss\ValueObjects\ValidationException;

class IntegerType implements TypesInterface
{
    protected $value;

    /**
     * IntegerType constructor.
     *
     * @param int $value
     */
    public function __construct(int $value)
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
        if (!is_int($this->value)) {
            throw new ValidationException('Value is not an integer');
        }
    }

    /**
     * Get the value of the object
     *
     * @return int
     */
    public function getValue(): int
    {
        return (int)$this->value;
    }
}
