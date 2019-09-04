<?php

namespace Lee\Tests;

use Lee\DivisionNumber;
use PHPUnit\Framework\TestCase;

class DivisionNumberTest extends TestCase
{
    public function testDivisionTwoNumbersCanBeMinus()
    {
        $addition = new DivisionNumber();
        $result = $addition->divisionTwoNumbers(1, 2);
        $expected = 0.5;

        $this->assertGreaterThanOrEqual($expected, $result);
    }
}
