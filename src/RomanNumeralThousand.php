<?php

namespace Arola\RomanNumerals;


class RomanNumeralThousand implements RomanNumeralInterface
{

    public function getValue() {
        return 1000;
    }

    public function toString()
    {
        return 'M';
    }

    /**
     * @param $int
     * @return bool
     */
    public function inRange($int)
    {
        return $int >= 900;
    }

    /**
     * @return RomanNumeralInterface
     */
    public function getPreviousNumber()
    {
        return new RomanNumeralFiveHundred();
    }
}
