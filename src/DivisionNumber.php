<?php

declare(strict_types=1);

namespace Lee;

use InvalidArgumentException;

class DivisionNumber
{
    public function divisionTwoNumbers(int $number1, int $number2)
    {
        if (0 === $number2) {
            throw new InvalidArgumentException('The $number2 parameter should not be zero');
        }

        ValidationNumber::validateTwoNumbers($number1, $number2);

        return $number1 / $number2;
    }
}
