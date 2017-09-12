<?php

namespace Solid\SRP;


/**
 * Class SRPTest
 * @package Solid\SRP
 */
class SRPTest
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

        $areaCalculator = new AreaCalculator($shapes);
        echo 'Test SRP: ' . PHP_EOL;
        echo $areaCalculator->output();
    }

    /**
     *
     */
    public function testCorrect(): void
    {
        $shapes = [
            new Circle(2.0),
            new Square(4.2)
        ];

        $areas = new AreaCalculator($shapes);
        $outputter = new SumCalculatorOutputter($areas);
        echo PHP_EOL . 'Test SRP correct: ' . PHP_EOL;
        echo $outputter->outputString() . PHP_EOL;
        echo $outputter->outputJson();
    }
}