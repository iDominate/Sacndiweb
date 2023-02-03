<?php

namespace Core;


use MysqliDb;

class DB
{
    private static $db;

    /**
     * Initializes connection to database with the Singleton Design Pattern
     * @return mixed
     */
    public static function connect()
    {
        if (!isset($db)) {
            self::$db = new MysqliDB(HOST, USERNAME, PASSWORD, DATABASE_NAME);
            if (self::$db->connect()) {
                echo 'Failed to connect to database';
            }
        }
        return self::$db;
    }
}
