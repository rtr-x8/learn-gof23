<?php


namespace DesignPattern\Adapter;


class Speaker
{
    private string $name;

    /**
     * Product constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function call(): string
    {
        return 'This is ' . $this->name;
    }
}
