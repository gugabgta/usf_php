<?php

use usf\Html;

require '../vendor/autoload.php';

session_start();

if(!empty($_POST['x'])) {
    var_dump($_POST);
}

require_once '../templates/head.php';
require_once '../templates/sobre.php';
require_once '../templates/footer.php';
