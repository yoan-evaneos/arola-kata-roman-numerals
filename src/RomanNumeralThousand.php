<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:19
 */

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
        return $int >= 900;
    }
}