<?php

session_start();

if(empty($_SESSION['login'])) $_SESSION['login'] = false;
require_once '../vendor/autoload.php';

require_once '../templates/head.php';
require_once '../templates/home.php';
require_once '../templates/footer.php';

echo(HOME);