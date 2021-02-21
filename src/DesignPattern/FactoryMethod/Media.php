<?php


namespace DesignPattern\FactoryMethod;


abstract class Media
{
    protected string $subject = "";
    protected string $author = "";

    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}
