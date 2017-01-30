<?php

//Add two numbers class
// the version of PHPUnit 4.8 or older.

class AdditionNumberTest extends PHPUnit_Framework_TestCase
{
    public function testAddTwoNumbersCanBeAdded()
    {
        $addition = new AdditionNumber();
        $result = $addition->addTwoNumbers(1, 2);
        $expected = 3;
        
        $this->assertSame($result, $expected);
    }
}
