<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:19
 */

namespace Arola\RomanNumerals;


class RomanNumeralFifty implements RomanNumeralInterface
{

    public function getValue() {
        return 50;
    }

    public function toString()
    {
        return 'L';
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
        return 40;
    }

    /**
     * @return int
     */
    public function getMaxRange()
    {
        return 89;
    }
}
