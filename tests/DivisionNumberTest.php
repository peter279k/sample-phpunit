<?php

namespace Lee\Tests;

use InvalidArgumentException;
use Lee\DivisionNumber;
use PHPUnit\Framework\TestCase;

class DivisionNumberTest extends TestCase
{
    public function testDivideTwoNumbersCanBeMinus()
    {
        $division = new DivisionNumber();
        $result = $division->divideTwoNumbers(1, 2);
        $expected = 0;

        $this->assertSame($expected, $result);
    }

    public function testDivideNumbersCanBeDivided()
    {
        $division = new DivisionNumber();
        $result = $division->divideNumbers(1, 2, 3);
        $expected = 0;

        $this->assertSame($expected, $result);
    }

    public function testDivideArrayNumbersThrowInvalidArgumentException()
    {
        $division = new DivisionNumber();

        $this->expectException(InvalidArgumentException::class);

        $division->divideNumbers([1], [2], [3]);
    }
}
