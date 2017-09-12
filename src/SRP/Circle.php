<?php

namespace Solid\SRP;

/**
 * Class Circle
 * @package Solid\SRP
 */
class Circle
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
    public function area(): float
    {
        return M_PI * $this->radius ** 2;
    }
}