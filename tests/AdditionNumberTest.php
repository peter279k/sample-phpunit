<?php

namespace Lee\Tests;

use Lee\AdditionNumber;
use PHPUnit\Framework\TestCase;

class AdditionNumberTest extends TestCase
{
    public function testAddTwoNumbersCanBeAdded()
    {
        $addition = new AdditionNumber();
        $result = $addition->addTwoNumbers(1, 2);
        $expected = 3;

        $this->assertSame($expected, $result);
    }
}
