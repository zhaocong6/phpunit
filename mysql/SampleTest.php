<?php

class SampleTest extends GenericTestsDatabaseTestCase
{
    public function testSomething()
    {
        $db = $this->getConnection();
        $count = $db->query("select * from test")->fetch();

        $this->assertEquals(11, $count['id']);
    }
}
