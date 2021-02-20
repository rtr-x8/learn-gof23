<?php


namespace App\TemplateMethod;


use DesignPattern\TemplateMethod\ReceptionFlow;

class SuperReceptionFlow extends ReceptionFlow
{
    /**
     * SuperReceptionFlow constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function greet(): void
    {
        echo 'Hello ' . $this->getName() . PHP_EOL;
    }

    public function navigate(): void
    {
        echo $this->getName() . ', your seat is A2' . PHP_EOL;
    }

    public function close(): void
    {
        echo 'Thank you. Have a nice day, ' . $this->getName() . PHP_EOL;
    }
}
