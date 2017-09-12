<?php

namespace Solid\SRP;

/**
 * Class SumCalculatorOutputter
 * @package Solid\SRP
 */
class SumCalculatorOutputter
{

    /**
     * @var AreaCalculator
     */
    private $areas;

    /**
     * SumCalculatorOutputter constructor.
     * @param $areas
     */
    public function __construct($areas)
    {
        $this->areas = $areas;
    }

    /**
     * @return string
     */
    public function outputString(): string
    {
        return implode('', array(
            '',
            'Sum of the areas of provided shapes: ',
            $this->areas->sum(),
            ''
        ));
    }

    /**
     * @return string
     */
    public function outputJson(): string
    {
        return json_encode(['sum' => $this->areas->sum()]);
    }
}