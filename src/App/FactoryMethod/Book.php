<?php


namespace App\FactoryMethod;


use DesignPattern\FactoryMethod\Media;

class Book extends Media
{

    /**
     * Book constructor.
     * @param string $subject
     * @param string $author
     */
    public function __construct(string $subject, string $author)
    {
        $this->subject = $subject;
        $this->author = $author;
    }
}
