<?php


use App\Adapter02\YoungSpeaker;
use Test\TestCase;

class YoungSpeakerTest extends TestCase
{
    /**
     * @test
     */
    public function loudが正常()
    {
        $name = '田中 太郎';

        $newSpeaker = new YoungSpeaker($name);
        $this->assertEquals("This is ${name}!!!", $newSpeaker->loud());
    }
}
