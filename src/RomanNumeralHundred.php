<?php

namespace Arola\RomanNumerals;


class RomanNumeralHundred implements RomanNumeralInterface
{

    public function getValue() {
        return 100;
    }

    public function toString()
    {
        return 'C';
    }

    /**
     * @param $int
     * @return bool
     */
    public function inRange($int)
    {
        return $int >= 90 && $int <= 499;
    }

    /**
     * @return RomanNumeralInterface
     */
    public function getPreviousNumber()
    {
        return new RomanNumeralFifty();
    }
}
