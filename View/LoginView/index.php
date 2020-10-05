<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="homepage.css">
    <title>Home</title>
</head>

<body>


    <?php
    if (isset($_SESSION['nao-existe-usuario'])) {
        echo "<script>alert('Usuario inexistente');</script>";
    }
    unset($_SESSION['nao-existe-usuario']);
    ?>

    <div class="content">
        <form action="autenticar-usuario.php" method="POST" class="forms">
            <input type="text" name="login-user" placeholder="Login" class="input-box" maxlength="100">
            <input type="password" name="senha-user" placeholder="Password" class="input-box" maxlength="25"><br>
            <input type="submit" name="submit" class="input-submit" value="Entrar">
            <a href="cadastrar-usuario-View.php" class="cadastro">Cadastrar</a>
        </form>

    </div>
</body>



</html>