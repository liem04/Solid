<?php

namespace Solid\LSP;


/**
 * Class LSPTest
 * @package Solid\LSP
 */
class LSPTest
{

    /**
     *
     */
    public function test(): void
    {
        $shapes = [
            new Square(10, 20)
        ];

        $areas = new AreaCalculator($shapes);
        echo $areas->sum();
    }
}