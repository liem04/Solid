<?php

namespace Solid\LSP;

/**
 * Class RectangleFactory
 * @package LSP
 */
class RectangleFactory
{

    /**
     * @param bool $isSquare
     * @return Rectangle
     */
    public static function create(bool $isSquare): Rectangle
    {
        if ($isSquare) {
            return new Square();
        }

        return new Rectangle();
    }
}