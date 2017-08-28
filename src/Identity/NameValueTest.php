<?php

namespace KickAss\ValueObjects\Identity;

use KickAss\ValueObjects\ValidationException;
use PHPUnit\Framework\TestCase;

/**
 * @covers NameValue
 */
class NameValueTest extends TestCase
{
    /**
     * @covers NameValue::validateSetValue()
     */
    public function testValidationThrowsErrorOnInvalidLastname()
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('Lastname is required');

        new NameValue('firstname', '');
    }
    /**
     * @covers NameValue::validateSetValue()
     */
    public function testValidationThrowsErrorOnInvalidFirstname()
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('Firstname is required');

        new NameValue('', 'lastname');
    }

    /**
     * @covers NameValue::fullName()
     */
    public function testGetFullName()
    {
        $value = new NameValue('firstname', 'lastname', 'title', 'middlename');

        $this->assertEquals('title firstname middlename lastname', $value->value());
    }

    /**
     * @covers NameValue::fullName()
     */
    public function testGetFullNameFromFirstAndLastName()
    {
        $value = new NameValue('firstname', 'lastname');

        $this->assertEquals('firstname lastname', $value->value());
    }

    /**
     * @covers NameValue::title()
     * @covers NameValue::firstname()
     * @covers NameValue::middlename()
     * @covers NameValue::lastname()
     */
    public function testNameGetters()
    {
        $value = new NameValue('firstname', 'lastname', 'title', 'middlename');

        $this->assertEquals('title', $value->title());
        $this->assertEquals('firstname', $value->firstname());
        $this->assertEquals('middlename', $value->middlename());
        $this->assertEquals('lastname', $value->lastname());
    }
}
