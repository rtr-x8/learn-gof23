<?php


namespace App\FactoryMethod;


use DesignPattern\FactoryMethod\MediaFactory;

class Writer
{
    use MediaFactory;

    private string $name;

    /**
     * Writer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function attachMediaFactory(): Book
    {
        return new Book('book subject', $this->getName());
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}
