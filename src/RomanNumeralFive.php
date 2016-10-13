<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:19
 */

namespace Arola\RomanNumerals;


class RomanNumeralFive implements RomanNumeralInterface
{
    public function getValue() {
        return 5;
    }

    public function toString()
    {
        return 'V';
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
        return new RomanNumeralOne();
    }

    /**
     * @return int
     */
    public function getMinRange()
    {
        return 4;
    }

    /**
     * @return int
     */
    public function getMaxRange()
    {
        return 8;
    }
}
