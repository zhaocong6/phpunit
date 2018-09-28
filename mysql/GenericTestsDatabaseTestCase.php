<?php

use PHPUnit\Framework\TestCase;

class GenericTestsDatabaseTestCase extends TestCase
{
    static private $pdo = null;
    private $conn = null;

    final public function getConnection()
    {
        if ($this->conn === null) {
            if (self::$pdo === null) {
                self::$pdo = new PDO($GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD']);
            }

            $this->conn = self::$pdo;
        }

        return $this->conn;
    }
}