<?php


use DesignPattern\Singleton\RegisterNote;
use Test\TestCase;

class RegisterNoteTest extends TestCase
{
    /**
     * @test
     */
    public function シングルトンクラスが同一であること()
    {
        $registerNote01 = RegisterNote::getInstance();
        sleep(0.2);
        $registerNote02 = RegisterNote::getInstance();
        sleep(0.2);
        $registerNote03 = RegisterNote::getInstance();
        sleep(0.2);

        $this->assertEquals($registerNote01->getTimestamp(), $registerNote02->getTimestamp());
        $this->assertEquals($registerNote02->getTimestamp(), $registerNote03->getTimestamp());
    }
}
