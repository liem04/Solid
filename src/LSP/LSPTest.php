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
            new Circle(2.0),
            new Square(4.2),
        ];

        $solidShapes = [
            new Cube(2.0)
        ];

        $areas = new AreaCalculator($shapes);
        $volumes = new VolumeCalculator($solidShapes);

        $output = new SumCalculatorOutputter($areas);
        $output2 = new SumCalculatorOutputter($volumes);

        echo PHP_EOL . ' test LSP: ' . PHP_EOL;
        echo $output->outputString() . PHP_EOL;
        echo $output2->outputString();
    }
}