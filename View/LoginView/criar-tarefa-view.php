<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="criar-tarefa-style.css">
    <title>Criar Tarefa</title>
</head>

<body>
    <div class="content">
        <form action="criar-tarefa-controller.php" method="POST">
            <h2>Criar Tarefa</h2>
            <input type="text" name="task-title" placeholder="Titulo Da Tarefa"><br>
            <input type="text" name="task-description" placeholder="Descrição"><br>
            <input type="datetime-local" name="task-begin-date" placeholder="Data de Inicio"><br>
            <input type="submit" name="submit" value="CRIAR">
        </form>
    </div>
</body>

</html>