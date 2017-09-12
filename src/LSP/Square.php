<?php

namespace Solid\LSP;


/**
 * Class Square
 * @package Solid\LSP
 */
class Square extends Rectangle
{

    /**
     * @return float
     * @throws \InvalidArgumentException
     */
    public function area(): float
    {
        if ($this->getHeight() !== $this->getWidth()) {
            throw new \InvalidArgumentException('this is not square');
        }
        return $this->getHeight() ** 2;
    }
}