<?php

use usf\Html;

require '../vendor/autoload.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == 'post') {
    var_dump($_POST);
}

require_once '../templates/head.php';
require_once '../templates/agendamentos.php';
require_once '../templates/footer.php';
