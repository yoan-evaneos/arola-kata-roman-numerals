<?php

namespace Arola\RomanNumerals;

class RomanNumeral
{
    /**
     * @var int
     */
    private $numeral;

    private $factory;

    /**
     * RomanNumeral constructor.
     * @param int $numeral
     */
    public function __construct($numeral)
    {
        $this->factory = new RomanNumeralFactory();
        $this->numeral = $numeral;
    }

    public function toString()
    {
        $numeral = $this->numeral;
        $result = '';
        while ($numeral > 0) {
            /** @var RomanNumeralInterface $value */
            $value = $this->factory->get($numeral);
            if($numeral < $value->getValue()) {
                $result .= $value->getPreviousNumber()->toString();
            }
            $result .= $value->toString();
            $numeral -= $value->getValue();
        }
        return $result;
    }
}
