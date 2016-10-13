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
        } else if ($this->numeral === 5) {
            return 'V';
        } elseif ($this->numeral === 10) {
            return 'X';
        } else {
            return 'U';
        }
    }
}
