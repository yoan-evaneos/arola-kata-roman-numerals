<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:19
 */

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
}