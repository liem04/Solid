<?php

use Solid\SRP\AreaCalculator;
use Solid\SRP\Circle;
use Solid\SRP\Square;

require_once __DIR__ . '/vendor/autoload.php';

$shapes = [
    new Circle(2.0),
    new Square(4.2)
];

$areaCalculator = new AreaCalculator($shapes);
echo $areaCalculator->output();
