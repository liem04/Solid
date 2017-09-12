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
        $rectangle = RectangleFactory::create(true);
        $rectangle->setHeight(5);
        $rectangle->setWidth(10);
        echo $rectangle->area();
    }
}