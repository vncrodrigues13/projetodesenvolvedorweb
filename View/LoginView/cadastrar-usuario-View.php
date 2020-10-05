<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastrar Usuario</title>
</head>

<body>

    <?php
        if (isset($_SESSION['already-exist'])){
            echo "<script>alert('Já existe usuários com esse Login ou esse ID');</script>;";
        }
        unset($_SESSION['already-exist']);
    ?>
    <div class="content">
        <form class="forms" action="cadastrar-usuario-controller.php" method="POST">
            <input type="text" name="id-user" placeholder="IDENTIFICADOR" class="input-txt" maxlength="100"><br>
            <input type="text" name="login-user" placeholder="LOGIN" class="input-txt"><br>
            <input type="password" name="senha-user" placeholder="SENHA" class="input-txt" maxlength="20"><br>
            <input type="submit" name="submit" value="SALVAR" class="submit">
        </form>
    </div>
</body>

</html>