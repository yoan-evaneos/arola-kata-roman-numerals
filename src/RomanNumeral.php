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
        if ($numeral === 0) {
            throw new \InvalidArgumentException('0 is not allowed');
        }
        if ($numeral > 4999) {
            throw new \InvalidArgumentException(sprintf('%s is not allowed. Max value : 4999', $numeral));
        }

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
                $numeral -= $value->getMinRange();
            } else {
                $numeral -= $value->getValue();
            }
            $result .= $value->toString();
        }
        return $result;
    }
}
