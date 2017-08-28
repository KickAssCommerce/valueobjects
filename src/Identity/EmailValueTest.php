<?php

namespace KickAss\ValueObjects\Identity;

use KickAss\ValueObjects\ValidationException;
use PHPUnit\Framework\TestCase;

/**
 * @covers EmailValue
 */
class EmailValueTest extends TestCase
{
    /**
     * @covers EmailValue::validateSetValue()
     */
    public function testValidationThrowsErrorOnInvalidValue()
    {
        $this->expectException(ValidationException::class);

        new EmailValue('example.com');
    }

    /**
     * @covers EmailValue::getValue()
     */
    public function testReturnValueIsString()
    {
        $value = new EmailValue('test@example.com');

        $this->assertEquals('string', gettype($value->getValue()));
    }

    /**
     * @covers EmailValue::__toString()
     */
    public function testValueEqualsGivenValue()
    {
        $value = new EmailValue('test@example.com');

        $this->assertEquals('test@example.com', (string)$value);
        $this->assertEquals('test@example.com', $value->getValue());
    }
}
