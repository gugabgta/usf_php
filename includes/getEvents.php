<?php

use usf\Event;
use usf\Connection;
use usf\NoSqlQuery;

require_once '../vendor/autoload.php';

if (!isset($_GET['start']) || !isset($_GET['end'])) {
    die("Please provide a date range.");
}

$time_zone = new DateTimeZone('America/Sao_Paulo');
$range_start = parseDateTime($_GET['start'], $time_zone);
$range_end = parseDateTime($_GET['end'], $time_zone);

error_log("range_start: " . $range_start->format('Y-m-d H:i:s'));
error_log("range_end: " . $range_end->format('Y-m-d H:i:s'));

$period = new DatePeriod($range_start, new DateInterval('P1D'), $range_end);

$connection = (new Connection)->connect('firebase');
$query = new NoSqlQuery($connection->getConnection());

$array_eventos = [];
foreach ($period as $key => $value) {
    $ano = $value->format('Y');
    $mes = $value->format('m');
    $dia = $value->format('d');
    $res = $query->select("eventos/$ano/$mes/$dia");
    $array_eventos[$key] = $res;
    if($res) {
        $array_eventos[$key]['start'] = $value->format('Y-m-d');
        $array_eventos[$key]['url'] = "evento.php?index=eventos/$ano/$mes/$dia";
    }
}

$array_eventos = array_filter($array_eventos);

function parseDateTime($string, $timeZone) {
    $date = new DateTime($string, $timeZone);
    return $date;
}

foreach ($array_eventos as $array) {
    $event = new Event($array, $time_zone);
    $res = $event->toArray();
    error_log("res: " . print_r($res, true));
    $output_arrays[] = $res;
}

echo json_encode($output_arrays);
