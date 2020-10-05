<?php
session_start();
include ('verifica-login.php');
require_once '../../UserModel/UserModel.php';



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
                    $obj = $_SESSION['objeto'];
                    $id_user = $obj['codigo_identificador'];
                    $login = $obj['login'];
                    echo $login."<br> ID: ".$id_user;
                ?>
            </h2>
            

        </header>

        <ol style="list-style: none;">
            <l1><a href="alterar-dados-usuario.php">Alterar Dados do Usuário</a><br></l1>
            <li><a href="criar-tarefa.php">Criar Tarefa</a><br></li>
            <li><a href="persistir-tarefas-view.php">Ver suas tarefas</a><br></li>
            <li><a href="logout.php">Sair</a></li>
        </ol>
        
        
        
    </div>
</body>

</html>
