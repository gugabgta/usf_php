<?php
session_start();

use usf\Query;
use usf\Connection;

require '../vendor/autoload.php';

if(isset($_POST['nome'])) {
    $con = new Query(Connection::getConnection('sqlite'));
    $con->insert('usuario', ['nome, cpf, email, senha, endereco, telefone'], $_POST);
}
require_once '../templates/head.php';
require_once '../templates/cadastro.php';
require_once '../templates/footer.php';
