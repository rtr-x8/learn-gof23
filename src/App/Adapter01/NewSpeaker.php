<?php


namespace App\Adapter01;


use DesignPattern\Adapter\Louder;
use DesignPattern\Adapter\Speaker;

class NewSpeaker extends Speaker implements Louder
{
    /**
     * NewSpeaker constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function loud(): string
    {
        return $this->call() . '!!!';
    }
}
