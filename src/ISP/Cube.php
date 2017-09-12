<?php

namespace Solid\ISP;


/**
 * Class Cube
 * @package ISP
 */
class Cube implements ShapeInterface, SolidShapeInterface
{

    /**
     * @var float
     */
    private $width;

    /**
     * Cube constructor.
     * @param float $width
     */
    public function __construct(float $width)
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return 6 * ($this->width ** 2);
    }

    /**
     * @return float
     */
    public function volume(): float
    {
        return $this->width ** 3;
    }
}