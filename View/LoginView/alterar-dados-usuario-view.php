<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alterar-dados-style.css">
    <title>Document</title>
</head>
<body>

    <?php
        if (isset($_SESSION['alterar-dados-exception'])){
            echo "<script>alert ('Por favor preencher ambos os campos!');</script>";
        }
        unset($_SESSION['alterar-dados-exception']);
    ?>
    <div class="content">
    <form action="alterar-dados-usuario-controller.php" method="POST">
        <h3>ALTERAR DADOS DO USUARIO</h3>
        <input type="text" name="login-user" placeholder="LOGIN"><br>
        <input type="password" name="senha-user" placeholder="SENHA"><br>
        <input type="submit" name="submit" value="ALTERAR">
    </form>
    </div>
</body>
</html>