<?php

session_start();

use usf\Html;
require '../vendor/autoload.php';

require_once '../templates/head.php';
echo '<script src="../js/agendar.js"></script>';
require_once '../templates/agendamentos.php';
require_once '../templates/footer.php';
