<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefa</title>
</head>
<body>
    <form action="criar-tarefa-controller.php" method="POST">
        <input type="text" name="task-title" placeholder="Titulo Da Tarefa"><br>
        <input type="text" name="task-description" placeholder="Descrição"><br>
        <input type="datetime-local" name="task-begin-date" placeholder="Data de Inicio"><br>
        <input type="submit" name="submit" value="CRIAR">
    </form>
</body>
</html>


