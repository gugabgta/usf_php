<?php

use usf\Event;
use usf\Connection;
use usf\NoSqlQuery;

require_once '../vendor/autoload.php';

if (!isset($_GET['start']) || !isset($_GET['end'])) {
    die("Erro");
}

$time_zone = new DateTimeZone('America/Sao_Paulo');
$range_start = parseDateTime($_GET['start'], $time_zone);
$range_end = parseDateTime($_GET['end'], $time_zone);

$period = new DatePeriod($range_start, new DateInterval('P1D'), $range_end);

$ano = $range_start->format('Y');
$mes_start = $range_start->format('m');
$mes_end = $range_end->format('m');

$meses = [];
if($mes_start == 11) {
    $meses = [11, 12, 1];
} elseif ($mes_start == 12) {
    $meses = [12, 1, 2];
} else {
    while($mes_start <= $mes_end) {
        $meses[] = $mes_start;
        $mes_start++;
    }
}

$connection = (new Connection)->connect('firebase');
$query = new NoSqlQuery($connection->getConnection());

$array_eventos = [];
$index = 0;
foreach($meses as $index => $mes) {
    $mes = sprintf("%02d", $mes);
    $select = $query->select("eventos/$ano/$mes");
    if(empty($select)) continue;
    foreach($select as $dia => $evento) {
        if($evento) {
            $array_eventos[$index] = $evento;
            $array_eventos[$index]['start'] = "$ano-$mes-$dia";
            $array_eventos[$index]['url'] = "evento.php?index=eventos/$ano/$mes/$dia";
            $index++;
        }
    }
}

function parseDateTime($string, $timeZone) {
    $date = new DateTime($string, $timeZone);
    return $date;
}
$output_arrays = [];

foreach ($array_eventos as $array) {
    $event = new Event($array, $time_zone);
    $res = $event->toArray();
    $output_arrays[] = $res;
}

echo json_encode($output_arrays);
