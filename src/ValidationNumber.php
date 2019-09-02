<?php

declare(strict_types=1);

namespace Lee;

use InvalidArgumentException;

class ValidationNumber
{
    public static function validateTwoNumbers($number1, $number2): void
    {
        if (false === is_int($number1)) {
            throw new InvalidArgumentException('Invalid integer value: ' . $number1);
        }

        if (false === is_int($number2)) {
            throw new InvalidArgumentException('Invalid integer value: ' . $number2);
        }
    }

    public static function validateNumbers(...$numbers): void
    {
        foreach ($numbers as $number) {
            if (false === is_int($number)) {
                throw new InvalidArgumentException('Invalid integer value: ' . $number);
            }
        }
    }
}
