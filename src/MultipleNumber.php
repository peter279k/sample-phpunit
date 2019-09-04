<?php

declare(strict_types=1);

namespace Lee;

class MultipleNumber
{
    public function multipleTwoNumbers(int $number1, int $number2): int
    {
        ValidationNumber::validateTwoNumbers($number1, $number2);

        return $number1 * $number2;
    }
}
