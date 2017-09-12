<?php

namespace Solid\LSP;


/**
 * Class Square
 * @package Solid\LSP
 */
class Square extends Rectangle
{

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }
}