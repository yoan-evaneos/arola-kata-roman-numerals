<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:19
 */

namespace Arola\RomanNumerals;


class RomanNumeralTen implements RomanNumeralInterface
{

    public function getValue() {
        return 10;
    }

    public function toString()
    {
        return 'X';
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
        return 9;
    }

    /**
     * @return int
     */
    public function getMaxRange()
    {
        return 39;
    }
}
