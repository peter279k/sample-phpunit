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

    public function multipleNumbers(...$numbers): int
    {
        ValidationNumber::validateNumbers((array) $numbers);

        $result = $numbers[0];
        $numberLength = count($numbers);
        for ($index=1; $index<$numberLength; $index++) {
            $result *= $numbers[$index];
        }

        return $result;
    }
}
