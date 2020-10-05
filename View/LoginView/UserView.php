<?php
session_start();
require_once '../../UserModel/UserModel.php';

$objeto = $_SESSION['objeto'];
$login = $objeto['login'];
$senha = $objeto['senha'];
$identificadorUsuario = $objeto['codigo_identificador'];
$user = new UserModel($identificadorUsuario,$login,$senha);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserView</title>
</head>

<body>

    <div class="content">
        <header>
            <h2>Ola, 
                <?php 
                    echo $login;
                ?>
            </h2>
            

        </header>

        <ol style="list-style: none;">
            <l1><a href="#">Alterar Dados do Usuário</a><br></l1>
            <li><a href="criar-tarefa.php">Criar Tarefa</a><br></li>
            <li><a href=#>Ver suas tarefas</a><br></li>
        </ol>
        
        
        
    </div>
</body>

</html>
