<?php

use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testStub()
    {
        //为SomeClass类创建桩件.
        $stub = $this->createMock(SomeClass::class);

        //配置桩件.
        $stub->method('doSomething')->willReturn('foo');

        //现在调用SomeClass类实例化的$stub里面的diSomething方法, 将返回foo;
        $this->assertEquals('foo', $stub->doSomething());

    }
}
