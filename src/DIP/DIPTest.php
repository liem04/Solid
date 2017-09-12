<?php

namespace Solid\DIP;


/**
 * Class DIPTest
 * @package Solid\DIP
 */
class DIPTest
{

    /**
     *
     */
    public function test(): void
    {
        $bookReader = new EBookReader(new PdfBook('pdf content'));
        echo $bookReader->read() . PHP_EOL;

        $bookReader = new EBookReader(new MobiBook());
        echo $bookReader->read() . PHP_EOL;
    }
}