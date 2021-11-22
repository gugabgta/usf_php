<?php

namespace usf;

use usf\Connection;
use Kreait\Firebase\Factory;

class NoSqlQuery extends QueryBuilder
{
    protected $connection;
    private $database;

    public function __construct(Factory $connection)
    {
        $this->connection = $connection;
        $this->database = $connection->createDatabase();
    }

    public function select($reference)
    {
        $reference = $this->database->getReference($reference);
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();
        return $value;
    }

    public function delete($reference)
    {
        $reference = $this->database->getReference($reference)->remove();
    }

    public function update($reference, $data)
    {
        foreach (array_keys($data) as $key) {
            $reference = $this->database->getReference("$reference/$key");
            $reference->set($data[$key]);
        }
    }

    public function insert($reference, $data)
    {
        $id = $this->getNewId($reference);
        $reference = $this->database->getReference("$reference/$id");
        $reference->set($data);
    }

    public function insert2($reference, $data)
    {
        $reference = $this->database->getReference($reference);
        $reference->set($data);
    }

    private function getNewId($reference)
    {
        $reference = $this->database->getReference($reference);
        $snapshot = $reference->getSnapshot();
        $child = $snapshot->numChildren();
        return $child;
    }
}
