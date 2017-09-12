<?php

namespace Solid\OCP;


/**
 * Class Square
 * @package Solid\OCP
 */
class Square implements ShapeInterface
{

    /**
     * @var  float
     */
    private $length;

    /**
     * Square constructor.
     * @param float $length
     */
    public function __construct(float $length)
    {
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return $this->length ** 2;
    }
}