<?php

session_start();

use usf\Connection;
use usf\NoSqlQuery;

require_once '../vendor/autoload.php';
require_once '../includes/colors.php';
if(isset($_SESSION['user'])){
	header('Location: agendamentos.php');
}

if(isset($_POST['email']) && isset($_POST['senha'])) {
    $connection = (new Connection)->connect('firebase');
    $query = new NoSqlQuery($connection->getConnection());

    $usuarios = $query->select('usuarios');
    foreach ($usuarios as $usuario) {
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == md5($_POST['senha'])) {
            $_SESSION['user'] = $usuario['nome'];
            header("Location: agendamentos.php?user={$usuario['nome']}");
        }
    }
}
require_once '../templates/head.php';
?>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<div class="container">
	<form method="post" action="">
		<div class="row">
			<div class="column-3 column label">
				<label for="">E-mail</label>
			</div>
			<div class="column-9 column input">
				<input class="form-control" type="email" name="email" required/>
			</div>
		</div>
		<div class="row">
			<div class="column-3 column label">
				<label for="">Senha</label>
			</div>
			<div class="column-9 column input">
				<input class="form-control" type="password" name="senha" required/>
			</div>
		</div>
		<button class="btn btn-primary">ENTRAR</button>
	</form>
</div>
<?php

require_once '../templates/footer.php';
