<?php


use App\TemplateMethod\SuperReceptionFlow;
use Test\TestCase;

class SuperReceptionFlowTest extends TestCase
{
    /**
     * @test
     */
    public function 受付可能()
    {
        $name = '田中 太郎';
        ob_start();
        new SuperReceptionFlow($name);
        $actual = ob_get_clean();

        $expected = "Hello ${name}\n${name}, your seat is A2\nThank you. Have a nice day, ${name}\n";
        $this->assertEquals($expected, $actual);
    }
}
