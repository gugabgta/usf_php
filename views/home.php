<?php

session_start();

use usf\Connection;
use usf\NoSqlQuery;

require_once '../vendor/autoload.php';

$connection = (new Connection)->connect('firebase');
$query = new NoSqlQuery($connection->getConnection());

if(isset($_POST['title'])) {
    ob_start();
    var_dump($_POST);
    error_log(ob_get_clean());
    $index = explode('-', $_POST['data']);
    $index = $index[0] . '/' . $index[1] . '/' . $index[2];
    unset($_POST['data']);
    $query->insert2('eventos/' . $index, $_POST);
    header('Location: ../views/agendamentos.php');
    exit();
}

$temas = $query->select('temas');
$buffets = $query->select('buffet');
$bebidas = $query->select('bebidas');

require_once '../templates/head.php';
?>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<div class="container">
	<form method="post" action="">
        <div class="row">
            <div class="col-lg-2">
                <label for="title">Título: </label>
            </div>
            <div class="col-lg-10">
                <input class="form-control" type="text" name="title" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label for="hora">Data: </label>
            </div>
            <div class="col-lg-10">
                <input class="form-control" type="date" name="data" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label for="">Hora: </label>
            </div>
            <div class="col-lg-10">
                <input type="time" class="form-control" name="hora" min="08:00" max="18:00" required>
                <small>Aberto das 8:00 as 18:00</small>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label for="qtdPessoas">Qtd Pessoas: </label>
            </div>
            <div class="col-lg-10">
                <input class="form-control" step="1" min="0" type="number" name="qtdPessoas" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="tema">Tema</label>
                <select placeholder="Selecione" name="tema" class="form-control" required>
                    <?php foreach($temas as $tema): ?>
                        <option value="<?= $tema ?>"><?= $tema ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="buffet">Buffet</label>
                <select placeholder="Selecione" name="buffet" class="form-control" required>
                    <?php foreach($buffets as $buffet): ?>
                        <option value="<?= $buffet ?>"><?= $buffet ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="bebida">Bebida</label>
                <select placeholder="Selecione" name="bebida" class="form-control" required>
                    <?php foreach($bebidas as $bebida): ?>
                        <option value="<?= $bebida ?>"><?= $bebida ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="" rows="6" style="resize: none;"></textarea>
            </div>
        </div>
        <button class="btn btn-primary">Enviar</button>
	</form>
</div>
<?php

require_once '../templates/footer.php';
