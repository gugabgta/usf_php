<?php

use usf\Connection;
use usf\NoSqlQuery;

require_once '../includes/setSessao.php';

if(isset($_GET['index'])) {
    $connection = (new Connection)->connect('firebase');
    $query = new NoSqlQuery($connection->getConnection());
    $res = $query->select($_GET['index']);
}

function __($key) {
    if(array_key_exists($key, dicionario)) {
        return dicionario[$key];
    }
    return $key;
}

require_once '../templates/head.php';
?>
<div class="container">
    <?php foreach ($res as $key => $value): ?>
        <div class="row">
            <label for="<?= $key ?>"><?= __($key) ?></label>
            <input type="text" name="<?= $key ?>" class="form-control" value="<?= $value ?>">
        </div>
    <?php endforeach ?>
</div>
<?php
require_once '../templates/footer.php';
