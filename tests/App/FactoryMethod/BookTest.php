<?php


use App\FactoryMethod\Book;
use Test\TestCase;

class BookTest extends TestCase
{
    /**
     * @test
     */
    public function bookには題名と著者の情報がある()
    {
        $book = new Book('subject', 'author name');

        $this->assertEquals('subject', $book->getSubject());
        $this->assertEquals('author name', $book->getAuthor());
    }
}
