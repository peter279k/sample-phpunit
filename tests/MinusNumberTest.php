<?php

namespace Lee\Tests;

use InvalidArgumentException;
use Lee\MinusNumber;
use PHPUnit\Framework\TestCase;

class MinusNumberTest extends TestCase
{
    public function testMinusTwoNumbersCanBeMinus()
    {
        $minus = new MinusNumber();
        $result = $minus->minusTwoNumbers(1, 2);
        $expected = -1;

        $this->assertSame($expected, $result);
    }

    public function testMinusNumbersCanBeMinus()
    {
        $minus = new MinusNumber();
        $result = $minus->minusNumbers(1, 2, 3);
        $expected = -4;

        $this->assertSame($expected, $result);
    }

    public function testMinusArrayNumbersThrowInvalidArgumentException()
    {
        $minus = new MinusNumber();

        $this->expectException(InvalidArgumentException::class);

        $minus->minusNumbers([1], [2], [3]);
    }
}
