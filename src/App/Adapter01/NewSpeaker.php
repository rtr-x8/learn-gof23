<?php


namespace App\Adapter01;


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
