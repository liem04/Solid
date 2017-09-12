<?php

namespace Solid\LSP;


/**
 * Class Square
 * @package Solid\LSP
 */
class Square implements ShapeInterface
{

    /**
     * @var  float
     */
    protected $length;

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