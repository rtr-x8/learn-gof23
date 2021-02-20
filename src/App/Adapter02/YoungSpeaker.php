<?php


namespace App\Adapter02;


use App\Adapter01\Louder;
use App\Adapter01\Speaker;

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
