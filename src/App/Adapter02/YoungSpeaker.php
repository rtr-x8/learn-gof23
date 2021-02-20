<?php


namespace App\Adapter02;


use DesignPattern\Adapter\Louder;
use DesignPattern\Adapter\Speaker;

class YoungSpeaker implements Louder
{
    private Speaker $speaker;

    /**
     * YoungSpeaker constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->speaker = new Speaker($name);
    }

    public function loud(): string
    {
        return $this->speaker->call() . '!!!';
    }
}
