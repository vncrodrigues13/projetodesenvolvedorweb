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
    <link rel="stylesheet" href="userviewstyle.css">
    <title>UserView</title>
</head>

<body>

    <div class="content">
        <header>
            <h1>  
                <?php 
                    $obj = $_SESSION['objeto'];
                    $id_user = $obj['codigo_identificador'];
                    $login = $obj['login'];
                    echo $login . " (".$id_user.")";
                ?>
            </h1>
            

        </header>

        <ol style="list-style: none;">
            <l1><a href="alterar-dados-usuario-view.php">Alterar Dados do Usuário</a><br><br></l1>
            <li><a href="criar-tarefa-view.php">Criar Tarefa</a><br><br></li>
            <li><a href="persistir-tarefas-view.php">Ver suas tarefas</a><br><br></li>
            <li><a href="deletar-tarefa-view.php">Remover Tarefas</a><br><br></li>
            <li><a href="logout.php">Sair</a></li>
        </ol>
        
        
        
    </div>
</body>

</html>
