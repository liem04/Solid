<?php

namespace Solid\SRP;

/**
 * Class AreaCalculator
 * @package Solid\SRP
 */
class AreaCalculator
{

    /**
     * @var array
     */
    private $shapes;

    /**
     * AreaCalculator constructor.
     * @param array $shapes
     */
    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    /**
     * @return float
     */
    public function sum(): float
    {
        $sum = 0.0;
        foreach ($this->shapes as $shape) {
            $sum += $shape->area();
        }

        return $sum;
    }

    /**
     * @return string
     */
    public function output(): string
    {
        return implode('', array(
            '',
            'Sum of the areas of provided shapes: ',
            $this->sum(),
            ''
        ));
    }
}