<?php


namespace App\Adapter01;


/**
 * 継承利用したアダプタパターン
 *
 * Class Main
 * @package App\Adapter01
 */
class Main
{
    public static function call(): void
    {
        $name = '田中 太郎';
        $speaker = new NewSpeaker($name);

        echo $speaker->call() . PHP_EOL;
        echo $speaker->loud() . PHP_EOL;
    }
}
