<?php

namespace Arola\RomanNumerals;


class RomanNumeralFiveHundred implements RomanNumeralInterface
{

    public function getValue() {
        return 500;
    }

    public function toString()
    {
        return 'D';
    }

    /**
     * @param $int
     * @return bool
     */
    public function inRange($int)
    {
        return $int >= 400 && $int <= 899;
    }

    /**
     * @return RomanNumeralInterface
     */
    public function getPreviousNumber()
    {
        return new RomanNumeralHundred();
    }
}
