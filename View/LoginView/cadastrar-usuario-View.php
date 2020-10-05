<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="content">
        <form class="forms" action="controller-createUser.php" method="POST">
            <input type="text" name="id-user" placeholder="CODIGO IDENTIFICADOR"><br>
            <input type="text" name="login-user" placeholder="LOGIN"><br>
            <input type="password" name="senha-user" placeholder="SENHA">
            <input type="submit" name="submit" value="SALVAR">
        </form>
    </div>
</body>

</html>