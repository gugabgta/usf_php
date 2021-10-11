<?php

use usf\Query;
use usf\Connection;

require 'vendor/autoload.php';

/* $query = new Query(Connection::getConnection('sqlite'));
$valor = $query->select('teste', ['*'], []); */

#$valor = $query->insert('teste', ['nome'], ['Alan']);
foreach(glob(ini_get("session.save_path") . "/*") as $sessionFile) { unlink($sessionFile); }
#var_dump($valor);
