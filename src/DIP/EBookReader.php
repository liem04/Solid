<?php

namespace Solid\DIP;


/**
 * Class EBookReader
 * @package Solid\DIP
 */
class EBookReader
{

    /**
     * @var BookInterface
     */
    private $book;

    /**
     * EBookReader constructor.
     * @param BookInterface $book
     */
    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        return $this->book->read();
    }
}