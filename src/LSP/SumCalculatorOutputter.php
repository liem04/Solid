<?php

namespace Solid\LSP;


/**
 * Class SumCalculatorOutputter
 * @package Solid\LSP
 */
class SumCalculatorOutputter
{

    /**
     * @var AreaCalculator
     */
    private $calculator;

    /**
     * SumCalculatorOutputter constructor.
     * @param $calculator
     */
    public function __construct($calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @return string
     * @throws AreaCalculatorInvalidShapeException
     */
    public function outputString(): string
    {
        return implode('', array(
            '',
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
            ''
        ));
    }

    /**
     * @return string
     * @throws AreaCalculatorInvalidShapeException
     */
    public function outputJson(): string
    {
        return json_encode(['sum' => $this->calculator->sum()]);
    }
}