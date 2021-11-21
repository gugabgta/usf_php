<?php

require_once '../includes/setSessao.php';

require_once '../templates/head.php';
?>
<link rel="stylesheet" type="text/css" href="../css/agendamentos.css">
<link href='../css/calendar.css' rel='stylesheet' />
<script src='../js/calendar.js'></script>
<script src='../js/agendamentos.js'></script>
<input type="hidden" id="data_inicial" value="<?= (new DateTime('now'))->format('Y-m-d') ?>">
<div class="row">
    <div class="col-lg-12">
        <div id="calendar"></div>
    </div>
</div>
<?php
require_once '../templates/footer.php';
