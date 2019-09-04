<?php

namespace Lee\Tests;

use Lee\MultipleNumber;
use PHPUnit\Framework\TestCase;

class MultipleNumberTest extends TestCase
{
    public function testMultipleTwoNumbersCanBeMultiple()
    {
        $addition = new MultipleNumber();
        $result = $addition->multipleTwoNumbers(3, 2);
        $expected = 6;

        $this->assertSame($expected, $result);
    }
}
