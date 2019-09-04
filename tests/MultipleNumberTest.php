<?php

namespace Lee\Tests;

use InvalidArgumentException;
use Lee\MultipleNumber;
use PHPUnit\Framework\TestCase;

class MultipleNumberTest extends TestCase
{
    public function testMultipleTwoNumbersCanBeMultiple()
    {
        $multiple = new MultipleNumber();
        $result = $multiple->multipleTwoNumbers(3, 2);
        $expected = 6;

        $this->assertSame($expected, $result);
    }

    public function testMultipleNumbersCanBeMultiple()
    {
        $multiple = new MultipleNumber();
        $result = $multiple->multipleNumbers(1, 2, 3);
        $expected = 6;

        $this->assertSame($expected, $result);
    }

    public function testMultipleArrayNumbersThrowInvalidArgumentException()
    {
        $multiple = new MultipleNumber();

        $this->expectException(InvalidArgumentException::class);

        $multiple->multipleNumbers([1], [2], [3]);
    }
}
