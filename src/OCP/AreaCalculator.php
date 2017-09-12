<?php

namespace Solid\OCP;


/**
 * Class AreaCalculator
 * @package Solid\OCP
 */
class AreaCalculator
{

    /**
     * @var ShapeInterface[]
     */
    private $shapes;

    /**
     * AreaCalculator constructor.
     * @param ShapeInterface[] $shapes
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
}