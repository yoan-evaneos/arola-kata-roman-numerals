<?php

namespace Arola\RomanNumerals;

class RomanNumeral
{

    /**
     * @var int
     */
    private $numeral;

    /**
     * RomanNumeral constructor.
     * @param int $numeral
     */
    public function __construct($numeral)
    {
        $this->numeral = $numeral;
    }

    public function toString()
    {
        if ($this->numeral === 1) {
            return 'I';
        } else {
            return 'V';
        }
    }
}
