<?php

use usf\Config;
use usf\NoSqlQuery;

session_start();

require_once '../vendor/autoload.php';
require_once 'colors.php';
include 'dicionario.php';

if(!isset($_SESSION['user'])) {
    header('Location: ../views/login.php');
    session_destroy();
}
