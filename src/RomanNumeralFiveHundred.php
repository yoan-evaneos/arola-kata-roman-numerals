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
        return $int >= $this->getMinRange() && $int <= $this->getMaxRange();
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
        return 400;
    }

    /**
     * @return int
     */
    public function getMaxRange()
    {
        return 899;
    }
}
