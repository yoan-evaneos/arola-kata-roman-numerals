<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:19
 */

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
}