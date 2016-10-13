<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 17:16
 */

namespace Arola\RomanNumerals;

interface RomanNumeralInterface{

    /**
     * @param $int
     * @return bool
     */
    public function inRange($int);

    public function getValue();

    public function toString();

    /**
     * @return RomanNumeralInterface
     */
    public function getPreviousNumber();

    public function getMinRange();

    public function getMaxRange();
}
