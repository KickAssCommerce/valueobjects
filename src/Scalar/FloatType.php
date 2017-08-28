<?php

namespace KickAss\ValueObjects\Scalar;

use KickAss\ValueObjects\ValidationException;

class FloatType implements TypesInterface
{
    protected $value;

    /**
     * FloatType constructor.
     *
     * @param float $value
     */
    public function __construct(float $value)
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
            throw new ValidationException('Value is not a float');
        }
    }

    /**
     * Get the value of the object
     *
     * @return float
     */
    public function value(): float
    {
        return (float)$this->value;
    }
}
