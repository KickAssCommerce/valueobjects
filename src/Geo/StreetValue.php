<?php

namespace KickAss\ValueObjects\Geo;

use KickAss\ValueObjects\Scalar\StringType;
use KickAss\ValueObjects\ValidationException;

class StreetValue extends StringType
{
    protected $street;
    protected $number;
    protected $numberAddition;
    protected $apartment;

    /**
     * StreetValue constructor.
     * @param string $street
     * @param int $number
     * @param string $numberAddition
     * @param string $apartment
     */
    public function __construct(string $street, int $number, string $numberAddition = '', string $apartment = '')
    {
        $this->street = $street;
        $this->number = $number;
        $this->numberAddition = $numberAddition;
        $this->apartment = $apartment;

        parent::__construct(trim(preg_replace(
            '/([\s]{2,})/',
            ' ',
            "{$this->street} {$this->number} {$this->numberAddition}\r\n{$this->apartment}"
        )));
    }

    /**
     * @return string
     */
    public function street(): string
    {
        return $this->street;
    }

    /**
     * @return int
     */
    public function number(): int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function numberAddition(): string
    {
        return $this->numberAddition;
    }

    /**
     * @return string
     */
    public function apartment(): string
    {
        return $this->apartment;
    }

    /**
     * Validate for basic string properties
     *
     * @throws \KickAss\ValueObjects\ValidationException
     */
    protected function validateSetValue()
    {
        parent::validateSetValue();

        if ('' === $this->street) {
            throw new ValidationException('Street is required');
        }
    }
}
