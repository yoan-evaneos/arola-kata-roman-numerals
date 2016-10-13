<?php

namespace Arola\Test\RomanNumerals;

use Arola\RomanNumerals\RomanNumeral;
use InvalidArgumentException;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function testItShouldReturnOne()
    {
        $numeral = new RomanNumeral(1);
        $this->assertEquals('I', $numeral->toString());
    }

    /**
     * @test
     */
    public function testItShouldReturnFive()
    {
        $numeral = new RomanNumeral(5);
        $this->assertEquals('V', $numeral->toString());
    }

    /**
     * @test
     */
    public function testItShouldReturnTen()
    {
        $numeral = new RomanNumeral(10);
        $this->assertEquals('X', $numeral->toString());
    }

    /**
     * @test
     */
    public function testItShouldReturn4888()
    {
        $numeral = new RomanNumeral(4888);
        $this->assertEquals('MMMMDCCCLXXXVIII', $numeral->toString());
    }

    /**
     * @test
     */
    public function testItShouldReturn4()
    {
        $numeral = new RomanNumeral(4);
        $this->assertEquals('IV', $numeral->toString());
    }

    /**
     * @test
     */
    public function testItShouldReturn49()
    {
        $numeral = new RomanNumeral(49);
        $this->assertEquals('XLIX', $numeral->toString());
    }

    /*
     * @test
     */
    public function testItIsARomanNumber()
    {
        $random = rand(1, 4999);
        $numeral = new RomanNumeral($random);

        $this->assertRegExp(
            '/[IVXLCDM]+/',
            $numeral->toString(),
            sprintf('random %s does not match with roman numbers', $random)
        );
    }

    /**
     * @test
     */
    public function testItShouldNotHaveFourSameLettersInTheRow()
    {
        $numeral = new RomanNumeral(4);

        $this->assertNotEquals('IIII', $numeral->toString());
    }

    /**
     * @test
     */
    public function testItShouldHaveFourSameLettersInTheRow()
    {
        $numeral = new RomanNumeral(4000);

        $this->assertEquals('MMMM', $numeral->toString());
    }

    /**
     * @test
     */
    public function testItShouldThrowAnInvalidExceptionForZero() {
        $this->expectException(InvalidArgumentException::class);
        $numeral = new RomanNumeral(0);
    }

    /**
     * @test
     */
    public function testItShouldThrowAnInvalidExceptionForMoreThan4999() {
        $this->expectException(InvalidArgumentException::class);
        $numeral = new RomanNumeral(5000);
    }
}
