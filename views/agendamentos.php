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
            <!--  -->
        </div>
    </div>
</div>
<?php
require_once '../templates/footer.php';
