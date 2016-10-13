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
        return $int >= 9 && $int <= 49;
    }
}