<?php

namespace Solid\LSP;


/**
 * Class AreaCalculator
 * @package Solid\LSP
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
     * @throws AreaCalculatorInvalidShapeException
     */
    public function sum(): float
    {
        $sum = 0.0;
        foreach ($this->shapes as $shape) {
            if ($shape instanceof ShapeInterface) {
                $sum += $shape->area();
                continue;
            }
            throw new AreaCalculatorInvalidShapeException('invalid shape');
        }

        return $sum;
    }
}