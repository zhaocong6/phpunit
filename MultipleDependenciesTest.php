<?php

use PHPUnit\Framework\TestCase;

class MultipleDependenciesTest extends TestCase
{
    public function testProducerFirst()
    {
        $this->assertTrue(true);

        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertEmpty([]);

        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer(... $params)
    {
        $this->assertEquals(['first', 'second'], $params);
    }
}
