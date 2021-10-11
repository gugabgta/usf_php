<?php

use usf\Query;

require '../vendor/autoload.php';

session_start();

if(isset($_POST['nome'])) {
    var_dump($_POST);
    $query = new Query($_SESSION['connection']);
    $query->insert('usuario', ['nome, cpf, email, senha, endereco, telefone'], $_POST);
}
require_once '../templates/head.php';
require_once '../templates/cadastro.php';
require_once '../templates/footer.php';
