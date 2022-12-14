<?php

/**
 * Singleton Pattern
 * Use Cases:
 *  - Useful for DB Connection
 *  - Creating a Logger
 *  - Creating a Profiler
 *  - Third party API where you need to keep the max connection
 *  - File Manipulation
 */
final class DB
{

    private static $instance = null;

    public static function getInstance()
    {

        if (is_null(DB::$instance)) {
            DB::$instance = new DB();
        }

        return DB::$instance;
    }

    public function Query()
    {
        return "SELECT * FROM employees";
    }

    private function __constructor()
    {

    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
}

$db = DB::getInstance();
$db1 = DB::getInstance();
$db2 = DB::getInstance();

var_dump($db);
var_dump($db1);
var_dump($db2);

echo $db->Query();
