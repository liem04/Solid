<?php


namespace Solid\OCP;


/**
 * Class OCPTest
 * @package Solid\OCP
 */
class OCPTest
{

    /**
     *
     */
    public function test(): void
    {
        $shapes = [
            new Circle(2.0),
            new Square(4.2)
        ];

        $areas = new AreaCalculator($shapes);
        $outputter = new SumCalculatorOutputter($areas);
        echo PHP_EOL . 'Test OCP correct: ' . PHP_EOL;
        echo $outputter->outputString() . PHP_EOL;
        echo $outputter->outputJson();
    }
}