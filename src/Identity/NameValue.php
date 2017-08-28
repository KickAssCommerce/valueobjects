<?php

namespace KickAss\ValueObjects\Identity;

use KickAss\ValueObjects\Scalar\StringType;
use KickAss\ValueObjects\ValidationException;

class NameValue extends StringType
{
    protected $title;
    protected $firstname;
    protected $middlename;
    protected $lastname;

    /**
     * NameValue constructor.
     * @param string $firstname
     * @param string $lastname
     * @param string $title
     * @param string $middlename
     */
    public function __construct(string $firstname, string $lastname, string $title = '', string $middlename = '')
    {
        $this->title = $title;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;

        parent::__construct(trim(preg_replace(
            '/([\s]{2,})/',
            ' ',
            "{$this->title} {$this->firstname} {$this->middlename} {$this->lastname}"
        )));
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return (string)$this->title;
    }

    /**
     * @return string
     */
    public function firstname(): string
    {
        return (string)$this->firstname;
    }

    /**
     * @return string
     */
    public function middlename(): string
    {
        return (string)$this->middlename;
    }

    /**
     * @return string
     */
    public function lastname(): string
    {
        return (string)$this->lastname;
    }

    /**
     * Get the full name
     *
     * @return string
     */
    public function fullName(): string
    {
        return (string)$this->value();
    }

    /**
     * Validate for basic string properties
     *
     * @throws \KickAss\ValueObjects\ValidationException
     */
    protected function validateSetValue()
    {
        parent::validateSetValue();

        if ('' === $this->lastname) {
            throw new ValidationException('Lastname is required');
        }

        if ('' === $this->firstname) {
            throw new ValidationException('Firstname is required');
        }
    }
}
