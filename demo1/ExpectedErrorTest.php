<?php

use PHPUnit\Framework\TestCase;

class ExpectedErrorTest extends TestCase
{

    public function testFailingInclude()
    {
        include 'not_flie.php';
    }
}