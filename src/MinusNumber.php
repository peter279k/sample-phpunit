<?php

declare(strict_types=1);

namespace Lee;

class MinusNumber
{
    public function minusTwoNumbers(int $number1, int $number2): int
    {
        ValidationNumber::validateTwoNumbers($number1, $number2);

        return $number1 - $number2;
    }

    public function minusNumbers(...$numbers): int
    {
        ValidationNumber::validateNumbers((array) $numbers);

        $result = $numbers[0];
        $numberLength = count($numbers);
        for ($index=1; $index<$numberLength; $index++) {
            $result -= $numbers[$index];
        }

        return $result;
    }
}
