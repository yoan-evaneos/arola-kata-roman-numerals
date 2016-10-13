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
        return $int >= $this->getMinRange();
    }

    /**
     * @return RomanNumeralInterface
     */
    public function getPreviousNumber()
    {
        return new RomanNumeralHundred();
    }

    /**
     * @return int
     */
    public function getMinRange()
    {
        return 900;
    }

    public function getMaxRange()
    {
    }
}
