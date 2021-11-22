<?php

use usf\Connection;
use usf\NoSqlQuery;

require_once '../includes/setSessao.php';

$connection = (new Connection)->connect('firebase');
$query = new NoSqlQuery($connection->getConnection());

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = $_POST['index'];
    if (!empty($_POST['delete'])) {
        $query->delete($index);
    } else {
        unset($_POST['index']);
        unset($_POST['delete']);
        unset($_POST['start']);
        $query->insert2($index, $_POST);
    }
    header('Location: ../views/agendamentos.php');
    exit();
} elseif (!isset($_GET['index'])) {
    die("Erro");
}

$res = $query->select($_GET['index']);

function __($key) {
    if(array_key_exists($key, dicionario)) {
        return dicionario[$key];
    }
    return $key;
}

require_once '../templates/head.php';
?>
<form method="post" action="">
    <div class="container">
        <?php foreach ($res as $key => $value): ?>
            <div class="row">
                <label for="<?= $key ?>"><?= __($key) ?></label>
                <input type="text" name="<?= $key ?>" <?= $key == 'start' ? 'disabled' : '' ?> class="form-control editable" value="<?= $value ?>" readonly>
            </div>
        <?php endforeach ?>
        <br>
        <input type="hidden" name="index" value="<?= $_GET['index'] ?>">
        <div class="row float-right">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-warning" id="edit">Editar</button>
                <button type="submit" class="btn btn-success" id="submit" style="display: none">Enviar</button>
            </div>
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-danger" id="cancel" style="display: none">Cancelar</button>
            </div>
            <div class="btn-group mr-2">
                <button type="submit" class="btn btn-danger" id="delete">Deletar</button>
                <input type="hidden" value="" name="delete" id="deleteFlag">
            </div>
        </div>
    </div>
</form>
<script src="../js/evento.js"></script>
<?php
require_once '../templates/footer.php';
