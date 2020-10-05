<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deletar-tarefa-style.css">
    <title>Deletar Tarefa</title>
</head>

<body>

    <?php
    if (isset($_SESSION['not-found-task'])) {
        echo "<script>alert('Não existe nenhuma tarefa com essa ID');</script>";
    }
    unset($_SESSION['not-found-task']);
    ?>
    <?php
    if (isset($_SESSION['deleted-task'])) {
        echo "<script>alert('Tarefa deletada com sucesso');</script>";
    }
    unset($_SESSION['deleted-task']);
    ?>
    <div class="content">
        <form action="deletar-tarefa-controller.php" method="POST">
            <h2>Deletar tarefa</h2>
            <input type="text" name="taskid-by_user" placeholder="Identificador da Tarefa"><br>
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>