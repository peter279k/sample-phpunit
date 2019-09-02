<?php

namespace Lee\Tests;

use Lee\MinusNumber;
use PHPUnit\Framework\TestCase;

class MinusNumberTest extends TestCase
{
    public function testMinusTwoNumbersCanBeMinus()
    {
        $addition = new MinusNumber();
        $result = $addition->minusTwoNumbers(1, 2);
        $expected = -1;

        $this->assertSame($expected, $result);
    }
}
