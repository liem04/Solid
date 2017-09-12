<?php

namespace Solid\DIP;


/**
 * Class MobiBook
 * @package Solid\DIP
 */
class MobiBook implements BookInterface
{

    /**
     * @return string
     */
    public function read()
    {
        return 'Reading a mobi book';
    }
}