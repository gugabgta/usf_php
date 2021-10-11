<?php

namespace usf;

use PDO;
use usf\Config;

class Connection
{
    public static function getConnection(string $type)
    {
        try {
            $pdo = new PDO(call_user_func(['self', $type]));
        } catch (Throwable $e) {
            var_dump($e->getMessage());
        }
        return $pdo;
    }

    public static function sqlite()
    {
        $connectionString = Config::$serverName . '\\' . Config::$database;
        return $connectionString;
    }
}
