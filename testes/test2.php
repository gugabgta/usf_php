<?php

use usf\Connection;
use usf\NoSqlQuery;
use usf\QueryBuilder;

require_once 'vendor/autoload.php';

$connection = (new Connection)->connect('firebase');
$query = new NoSqlQuery($connection->getConnection());

/* $evento1 = json_decode('{"marcado": false}', true);
$evento2 = json_decode('{"marcado": true, "cliente": 0, "descricao": "texto descritivo", "qtdPessoas": 23, "horario": "14:00"}', true);
 */
#$query->insert2('eventos/2021/11/01', $evento1);
#$query->insert2('eventos/2021/11/02', $evento2);
var_dump($query->select('eventos'));

$query->insert2("eventos/2021/11/02", $evento2);

#$query->insert2('eventos/2021/11/01', $evento1);
