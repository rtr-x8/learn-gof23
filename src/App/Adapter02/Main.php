<?php


namespace App\Adapter02;


class Main
{
    public static function call(): void
    {
        $name = '田中 太郎';
        $speaker = new YoungSpeaker($name);

        echo $speaker->loud() . PHP_EOL;
    }
}
