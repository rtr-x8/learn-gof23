<?php


use App\FactoryMethod\Book;
use App\FactoryMethod\Writer;
use Test\TestCase;

class WriterTest extends TestCase
{
    /**
     * @test
     */
    public function Mediaを継承したクラスを取得できる()
    {
        $faker = Faker\Factory::create('ja_JP');
        $writer = new Writer($faker->name);

        $this->assertInstanceOf(Book::class, $writer->createMedia());
    }
}
