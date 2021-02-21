<?php


namespace App\Singleton02;


class Main
{
    public static function call(): void
    {
        $uniqueNote01 = UniqueNote::getInstance();
        sleep(0.2);
        $uniqueNote02 = UniqueNote::getInstance();
        sleep(0.2);
        $uniqueNote03 = UniqueNote::getInstance();
        sleep(0.2);

        echo $uniqueNote01->getTimestamp() . PHP_EOL;
        echo $uniqueNote02->getTimestamp() . PHP_EOL;
        echo $uniqueNote03->getTimestamp() . PHP_EOL;
    }
}
