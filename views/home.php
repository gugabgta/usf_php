<?php

session_start();

require_once '../vendor/autoload.php';

var_dump($_SESSION['connection']);
var_dump(session_name());

require_once '../templates/head.php';
require_once '../templates/home.php';
require_once '../templates/footer.php';
