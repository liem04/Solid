<?php

namespace Solid\OCP;


/**
 * Class Circle
 * @package Solid\OCP
 */
class Circle implements ShapeInterface
{

    /**
     * @var float
     */
    private $radius;

    /**
     * Circle constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return M_PI * $this->radius ** 2;
    }
}