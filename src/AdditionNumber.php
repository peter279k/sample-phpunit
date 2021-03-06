<?php

declare(strict_types=1);

namespace Lee;

class AdditionNumber
{
    public function addTwoNumbers($number1, $number2): int
    {
        ValidationNumber::validateTwoNumbers($number1, $number2);

        return $number1 + $number2;
    }

    public function addNumbers(...$numbers): int
    {
        ValidationNumber::validateNumbers((array) $numbers);

        return array_sum($numbers);
    }
}
