<?php

namespace Solid\SRP;

/**
 * Class Square
 * @package Solid\SRP
 */
class Square
{

    /**
     * @var  float
     */
    private $length;

    /**
     * Square constructor.
     * @param float $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return $this->length ** 2;
    }
}