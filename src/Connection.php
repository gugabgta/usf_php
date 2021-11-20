<?php

namespace usf;

use PDO;
use usf\Config;
use Kreait\Firebase\Factory;

class Connection
{
    private $type;
    protected $connection;

    public function connect(string $type)
    {
        try {
            $this->connection = call_user_func([$this, $type]);
            if (in_array($type, $this->arraySql())) {
                $this->type = 'sql';
            } else if (in_array($type, $this->arrayNoSql())) {
                $this->type = 'nosql';
            } else {
                throw new \Exception("Invalid type of database");
            }
        } catch (Throwable $e) {
            var_dump($e->getMessage());
        }
        return $this;
    }

    private function sqlite()
    {
        $connectionString = Config::$serverName . '\\' . Config::$database;
        return new PDO($connectionString);
    }

    private function firebase()
    {
        return $factory = (new Factory)
            ->withServiceAccount('../RealtimeDatabase.json')
            ->withDatabaseUri('https://teste-f99d6-default-rtdb.firebaseio.com');
    }

    private function arraySql()
    {
        return ['mysql', 'sqlite'];
    }

    private function arrayNoSql()
    {
        return ['firebase'];
    }

    public function getType()
    {
        return $this->type;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
