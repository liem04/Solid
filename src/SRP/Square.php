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
}