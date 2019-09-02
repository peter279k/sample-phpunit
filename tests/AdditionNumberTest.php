<?php

namespace Lee\Tests;

use InvalidArgumentException;
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

    public function testAddTwoFloatNumbersThrowInvalidArgumentException()
    {
        $addition = new AdditionNumber();

        $this->expectException(InvalidArgumentException::class);

        $addition->addTwoNumbers(1.1, 2.2);
    }

    public function testAddTwoStringNumbersThrowInvalidArgumentException()
    {
        $addition = new AdditionNumber();

        $this->expectException(InvalidArgumentException::class);

        $addition->addTwoNumbers('1.1', '2.2');
    }

    public function testAddNumbersCanBeAdded()
    {
        $addition = new AdditionNumber();
        $result = $addition->addNumbers(1, 2, 3);
        $expected = 6;

        $this->assertSame($expected, $result);
    }

    public function testAddArrayNumbersThrowInvalidArgumentException()
    {
        $addition = new AdditionNumber();

        $this->expectException(InvalidArgumentException::class);

        $addition->addNumbers([1], [2], [3]);
    }
}
