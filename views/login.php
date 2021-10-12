<?php
session_start();

use usf\Html;
use usf\Query;
use usf\Sistema;
use usf\Connection;

require '../vendor/autoload.php';
if(isset($_POST['email']) && isset($_POST['senha'])) {
    $con = new Query(Connection::getConnection('sqlite'));
    $res = $con->select('usuario', ['*'], ['email' => $_POST['email'], ' and senha' => $_POST['senha']]);
    if(!empty($res)) {
        if(is_array($res)) $res = $res[0];
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $res['nome'];
        Sistema::redirect('/views/home.php');
    }
}
require_once '../templates/head.php';
require_once '../templates/login.php';
require_once '../templates/footer.php';
