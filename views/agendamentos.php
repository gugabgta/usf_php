<?php

require '../includes/setSessao.php';

require_once '../templates/head.php';
?>
<link rel="stylesheet" type="text/css" href="../css/agendamentos.css">
<div class="row" >
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <div class="container">
                    <span class="side-title">
                    VERIFIQUE UMA DATA PARA AGENDAR SEU EVENTO
                    </span>
                    <div class="options">
                        <span class="side-text">
                            STATUS
                        </span>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fas fa-square-full" style="color: black"></i>DISPONIVEL</li>
                            <li class="list-group-item"><i class="fas fa-square-full" style="color: yellow"></i>EM ANALISE</li>
                            <li class="list-group-item"><i class="fas fa-square-full" style="color: blue"></i>CONFIRMADO</li>
                            <li class="list-group-item"><i class="fas fa-square-full" style="color: green"></i>OPEN HOUSE</li>
                            <li class="list-group-item"><i class="fas fa-square-full" style="color: red"></i>INDISPONIVEL</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="container">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
                    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,700'>
                    <link rel="stylesheet" href="../css/style.css">
                    <div id="calendar"></div>
                        <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
                        <script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>
                        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js'></script>
                        <script src="../js/index.js"></script>
                </div>
            </div>
        </div>
    </div>
</div>
?>
<?php
require_once '../templates/footer.php';
