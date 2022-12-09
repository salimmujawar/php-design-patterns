<?php

/**
 * Singleton Pattern
 */
class DB
{

    public static $instance;

    public static function getInstance()
    {

        if (!isset(DB::$instance)) {
            DB::$instance = new DB();
        }

        return DB::$instance;
    }

    private function __constructor()
    {

    }

    private function __clone()
    {

    }
}

$db = DB::getInstance();
$db1 = DB::getInstance();
$db2 = DB::getInstance();

var_dump($db);
var_dump($db1);
var_dump($db2);
