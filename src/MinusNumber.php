<?php

declare(strict_types=1);

namespace Lee;

class MinusNumber
{
    public function minusTwoNumbers(int $number1, int $number2): int
    {
        if (false === is_int($number1)) {
            throw new InvalidArgumentException('Invalid integer value: ' . $number1);
        }

        if (false === is_int($number2)) {
            throw new InvalidArgumentException('Invalid integer value' . $number2);
        }

        return $number1 - $number2;
    }
}
