<?php


namespace App\TemplateMethod;


class Main
{
    public static function call(): void
    {
        new SuperReceptionFlow('田中 太郎');
    }
}
