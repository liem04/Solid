<?php

namespace Solid\LSP;


/**
 * Class Cube
 * @package Solid\LSP
 */
class Cube extends Square
{

    /**
     * @return float
     */
    public function volume(): float
    {
        return $this->area() * $this->length;
    }
}