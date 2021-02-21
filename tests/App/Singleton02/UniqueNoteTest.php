<?php

namespace Tests\App\Singleton02;

use App\Singleton02\UniqueNote;
use Test\TestCase;

class UniqueNoteTest extends TestCase
{
    /**
     * @test
     */
    public function uniqueNoteは唯一である()
    {
        $uniqueNote01 = UniqueNote::getInstance();
        sleep(0.2);
        $uniqueNote02 = UniqueNote::getInstance();
        sleep(0.2);
        $uniqueNote03 = UniqueNote::getInstance();
        sleep(0.2);

        $this->assertEquals($uniqueNote01->getTimestamp(), $uniqueNote02->getTimestamp());
        $this->assertEquals($uniqueNote02->getTimestamp(), $uniqueNote03->getTimestamp());
    }
}
