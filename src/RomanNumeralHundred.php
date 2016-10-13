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
        return $int >= $this->getMinRange() && $int <= $this->getMaxRange();
    }

    /**
     * @return RomanNumeralInterface
     */
    public function getPreviousNumber()
    {
        return new RomanNumeralTen();
    }

    /**
     * @return int
     */
    public function getMinRange()
    {
        return 90;
    }

    /**
     * @return int
     */
    public function getMaxRange()
    {
        return 399;
    }
}
