<?php

namespace usf;

use PDO;
use usf\Connection;
use Kreait\Firebase\Factory;

class QueryBuilder
{
    protected $connection;

    public function __construct(Connection $connection)
    {
        $type = $connection->getType();
        if($type == 'sql'){
            return new SqlQuery($connection->getConnection());
        } elseif($type == 'nosql') {
            return new NoSqlQuery($connection->getConnection());
        }
    }
}
