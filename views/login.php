<?php

use usf\Html;

require '../vendor/autoload.php';

session_start();
if($_SERVER['REQUEST_METHOD'] == 'post') {
    echo '<p>'. 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam laboriosam iste sint eligendi quaerat non officiis omnis corrupti nesciunt, molestias perferendis maxime harum repellendus, ad quibusdam alias. Nostrum, laudantium fugiat.';
    echo '</p>';
    var_dump($_POST);
}
require_once '../templates/head.php';
require_once '../templates/login.php';
require_once '../templates/footer.php';
