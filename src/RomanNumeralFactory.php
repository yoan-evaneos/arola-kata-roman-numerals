<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:29
 */

namespace Arola\RomanNumerals;


class RomanNumeralFactory
{
    public function __construct() {
        $this->romanNumerals = [
            new RomanNumeralOne(),
            new RomanNumeralFive(),
            new RomanNumeralTen(),
            new RomanNumeralFifty(),
            new RomanNumeralHundred(),
            new RomanNumeralFiveHundred(),
            new RomanNumeralThousand(),
        ];
    }

    /**
     * @param $int
     * @return RomanNumeralInterface
     */
    public function get($int) {
        foreach($this->romanNumerals as $value) {
            if ($value->inRange($int)) {
                return $value;
            }
        }
    }
}