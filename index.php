<?php

use usf\Sistema;
use usf\Connection;

require_once 'vendor/autoload.php';
session_start();

define('HOME', '/views/home.php');
$_SESSION['connection'] = Connection::getConnection('sqlite');

Sistema::redirect(HOME);
