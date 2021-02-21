<?php


namespace App\FactoryMethod;


class Main
{
    public static function call(): void
    {
        $writer = new Writer('田中 太郎');
        $book = $writer->createMedia();

        echo $writer->getName() . PHP_EOL;
        echo $book->getAuthor() . PHP_EOL;
        echo $book->getSubject() . PHP_EOL;
    }
}
