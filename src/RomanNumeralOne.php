<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:19
 */

namespace Arola\RomanNumerals;


class RomanNumeralOne implements RomanNumeralInterface
{

    public function getValue() {
        return 1;
    }

    public function toString()
    {
        return 'I';
    }

    /**
     * @param $int
     * @return bool
     */
    public function inRange($int)
    {
        return $int >= 1 && $int <= 3;
    }

    public function toInt()
    {
        // TODO: Implement toInt() method.
    }

    /**
     * @return RomanNumeralInterface
     */
    public function getPreviousNumber()
    {
        throw new \LogicException();
    }
}
