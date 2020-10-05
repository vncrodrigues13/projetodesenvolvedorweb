<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>



    <?php
        if (isset($_SESSION['nao-existe-usuario'])){
            echo "<script>alert('Usuario inexistente');</script>";
        }

    ?>
    <div class="content">
        <form action="autenticar-usuario.php" method="POST" class="forms">
            <input type="text" name="login-user" placeholder="Login" class="input-box">
            <input type="password" name="senha-user" placeholder="Password" class="input-box"><br>
            <input type="submit" name="submit" class="input-submit">
            <a href="cadastrar-usuario-View.php">Cadastrar</a>
        </form>
    </div>
</body>



</html>