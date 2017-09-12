<?php

namespace Solid\LSP;


/**
 * Class Rectangle
 * @package Solid\LSP
 */
class Rectangle implements ShapeInterface
{

    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return $this->height * $this->width;
    }
}