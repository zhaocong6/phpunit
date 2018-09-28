<?php

class SampleTest extends GenericTestsDatabaseTestCase
{
    public function testSomething()
    {
        //phpunit --bootstrap GenericTestsDatabaseTestCase.php --configuration mysql.xsl SampleTest.php
        $db = $this->getConnection();
        $count = $db->query("select * from test")->fetch();

        $this->assertEquals(11, $count['id']);
    }
}
