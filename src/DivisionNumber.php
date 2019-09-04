<?php

declare(strict_types=1);

namespace Lee;

use InvalidArgumentException;

class DivisionNumber
{
    public function divideTwoNumbers(int $number1, int $number2)
    {
        if (0 === $number2) {
            throw new InvalidArgumentException('The $number2 parameter should not be zero');
        }

        ValidationNumber::validateTwoNumbers($number1, $number2);

        return (int) ($number1 / $number2);
    }

    public function divideNumbers(...$numbers)
    {
        ValidationNumber::validateNumbers((array) $numbers);

        $result = $numbers[0];
        $numberLength = count($numbers);
        for ($index=1; $index<$numberLength; $index++) {
            $result /= $numbers[$index];
        }

        return (int) $result;
    }
}
