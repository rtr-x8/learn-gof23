<?php


use App\Adapter01\NewSpeaker;
use Test\TestCase;

class NewSpeakerTest extends TestCase
{
    /**
     * @test
     */
    public function loudが正常()
    {
        // 継承元の[Speaker.php]のテストはしない（すでに十分にテストされている前提）
        // 場合によってはモックする？

        $name = '田中 太郎';

        $newSpeaker = new NewSpeaker($name);
        $this->assertEquals("This is ${name}!!!", $newSpeaker->loud());
    }
}
