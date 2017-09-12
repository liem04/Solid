<?php


/**
 * Class ShapeInterface
 */
interface ShapeInterface
{

    /**
     * @return float
     */
    public function area(): float;

    /**
     * @return float
     */
    public function volume(): float;
}