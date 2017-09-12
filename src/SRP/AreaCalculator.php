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
        $area = [];
        foreach ($this->shapes as $shape) {
            if ($shape instanceof Square) {
                $area[] = $shape->getLength() ** 2;
            } elseif ($shape instanceof Circle) {
                $area[] = M_PI * $shape->getRadius() ** 2;
            }
        }

        return array_sum($area);
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