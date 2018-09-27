<?php

use PHPUnit\Framework\TestCase;

class DependencyAndDataProviderComboTest extends TestCase
{
    public function provider()
    {
        return [['provider1'], ['provider2']];
    }
    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }
    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }
    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     * @dataProvider provider
     */
    public function testConsumer(... $params)
    {
        $this->assertEquals(['provider1', 'first', 'second'], $params);
    }
}