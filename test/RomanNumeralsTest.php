<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 13/10/2016
 * Time: 16:21
 */

namespace Arola\Test\RomanNumerals;


class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function testItShouldReturnOne() {
        $numeral = new RomanNumeral(1);
        $this->assertEquals('I', $numeral->toString());
    }
}