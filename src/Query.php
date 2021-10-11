<?php

namespace usf;

use PDO;
use usf\Connection;

class Query {

    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function select($table, $columns, $where)
    {
        $columns = implode(', ', $columns);
        $where = $this->buildQuery($where);
        if(empty($where)) {
            $stm = $this->connection->query("SELECT $columns FROM $table", PDO::FETCH_ASSOC);
        } else {
            $stm = $this->connection->query("SELECT $columns FROM $table WHERE $where", PDO::FETCH_ASSOC);
        }
        $stm->execute();
        return $stm->fetchAll();
    }

    public function insert($table, $columns, $values)
    {
        $columns = implode(', ', $columns);
        $values = array_map(function ($value) {
            return "'$value'";
        }, $values);
        $values = implode(', ', $values);
        var_dump("INSERT INTO $table ($columns) VALUES ($values)");
        $stm = $this->connection->query("INSERT INTO $table ($columns) VALUES ($values)");
        var_dump(['$stm', $stm]);
        return $stm->execute();
    }

    private function buildQuery($array)
    {
        $string = '';
        foreach($array as $index => $value) {
            $string .= "$index = '$value'";
        }
        return $string;
    }
}
