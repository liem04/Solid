<?php

use Solid\SRP\AreaCalculator;
use Solid\SRP\Circle;
use Solid\SRP\Square;

require_once __DIR__ . '/vendor/autoload.php';

$testSRP = new \Solid\SRP\SRPTest();
$testSRP->test();
$testSRP->testCorrect();

$testOCP = new \Solid\OCP\OCPTest();
$testOCP->test();
