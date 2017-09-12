<?php

namespace Solid\DIP;


/**
 * Class PdfBook
 * @package Solid\DIP
 */
class PdfBook implements BookInterface
{

    /**
     * @var string
     */
    private $content;

    /**
     * PdfBook constructor.
     * @param string $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        return 'Reading a pdf book with content: ' . $this->content;
    }
}