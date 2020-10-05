<?php
session_start();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alterar-dados-usuario-controller.php" method="POST">
        <h2>ALTERAR DADOS DO USUARIO</h2>
        <input type="text" name="login-user" placeholder="LOGIN"><br>
        <input type="password" name="senha-user" placeholder="SENHA"><br>
        <input type="submit" name="submit" value="ALTERAR">
    </form>
</body>
</html>