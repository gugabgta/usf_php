<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/font-awesome.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,700'>
    <title>Easy Events</title>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/all.min.js"></script>
</head>
<body>
<div class="nav-top" style="background-color: <?= backgroundColor ?>;">
    <img src="../imagens/LogoTransparente.png" alt="logo" style="width:30%;height: auto;z-index: 1;margin-top: 30px;">
    <div class="nav-top-buttons" style="">
        <?php if (empty($_SESSION['user'])) : ?>
            <a class="" id="cadastro" aria-current="page" href="../views/login.php">Entre</a> ou <a class="" id="cadastro" aria-current="page" href="../views/cadastro.php">Cadastre</a>
            <b class="nav-link">Para Realizar seu agendamento</b>
        <?php else: ?>
            <b class="">Bem Vindo <?= $_SESSION['user'] ?></b>
            <a class="nav-link" id="cadastro" aria-current="page" href="../views/sair.php">SAIR</a>
        <?php endif ?>
    </div>
</div>
<nav class="navbar sticky-top navbar-bot navbar-expand-lg navbar-light" style="background-color: <?= backgroundColor ?>;">
    <div class="nav-buttons row">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="../views/home.php">Agendar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../views/agendamentos.php">Agendamentos</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link active" href="../views/buffet.php">Buffet</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link active" href="../views/sobre.php">Sobre nós</a>
            </li>
            <?php if(!empty($_SESSION['login'])): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="../views/agendar.php">Agendar Evento</a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>
<div class="espaco">
