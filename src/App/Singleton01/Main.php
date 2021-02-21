<?php


namespace App\Singleton01;


use DesignPattern\Singleton\RegisterNote;

class Main
{
    public static function call(): void
    {
        $registerNote01 = RegisterNote::getInstance();
        sleep(0.2);
        $registerNote02 = RegisterNote::getInstance();
        sleep(0.2);
        $registerNote03 = RegisterNote::getInstance();
        sleep(0.2);

        echo $registerNote01->getTimestamp() . PHP_EOL;
        echo $registerNote02->getTimestamp() . PHP_EOL;
        echo $registerNote03->getTimestamp() . PHP_EOL;
    }
}
