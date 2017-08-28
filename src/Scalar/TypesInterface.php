<?php

namespace KickAss\ValueObjects\Scalar;

interface TypesInterface
{
    /**
     * Get the value of the object as the type enforced by the scalar class
     */
    public function getValue();
}