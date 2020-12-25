<?php

namespace components;

class DB
{
    private static function getPDO()
    {
        $db_name = DB_NAME;
        $db_host = DB_HOST;
        $db_user = DB_USER;
        $db_pass = DB_PASS;
        try {
            $st = "mysql:host=$db_host; dbname=$db_name";
            $pdo = new \PDO($st, $db_user, $db_pass);
            return $pdo;
        } catch (\Exception $exception) {
            return false;
        }

    }
}