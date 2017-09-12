<?php

namespace Solid\ISP;


/**
 * Class ISPTest
 * @package Solid\ISP
 */
class ISPTest
{

    /**
     *
     */
    public function test(): void
    {
        $circle = new Circle(2.0);
        echo 'Area of circle: ' . $circle->area() . PHP_EOL;

        $cube = new Cube(10.0);
        echo 'Area of cube: ' . $cube->area() . PHP_EOL;
        echo 'Volume of cube: ' . $cube->volume() . PHP_EOL;
    }
}