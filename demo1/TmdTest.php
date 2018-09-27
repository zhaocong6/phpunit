<?php

use PHPUnit\Framework\TestCase;

class TmdTest extends TestCase
{
    public function testTmd()
    {
        $this->assertEquals(
            [1, 1],
            ['1', 1]
        );
    }
}
