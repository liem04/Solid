<?php

namespace Solid\LSP;


/**
 * Class VolumeCalculator
 * @package Solid\LSP
 */
class VolumeCalculator extends AreaCalculator
{

    /**
     * @return array
     */
    public function sum()
    {
        $data = parent::sum();
        return [$data];
    }
}