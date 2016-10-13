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