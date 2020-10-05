<?php
session_start();
include ('../../DAO/Connection.php');
include ('../../DAO/TarefaDAO.php');

$user = $_SESSION['objeto'];
$userID = $user['codigo_identificador'];

$conn = new Connection();
$conn = $conn -> getConnection();

$tarefaDAO = new TarefaDAO($conn);
$result = $tarefaDAO -> getTaskByUserID($userID);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="persistir-tarefas-style.css">
    <title>Persistir Tarefas</title>
    <style>
        td{
            position: relative;
            text-align: center;
        }
    </style>

</head>
<body>
    <table align="center" border="1px" style="width: 600px; line-height: 40px;">
        <tr>
            <th colspan="4"><h2>Suas Tarefas</h2></th>
        </tr>
        <t>
            <th>Title</th>
            <th>Description</th>
            <th>Codigo da Tarefa</th>
            <th>Status</th>
        </t>

        <?php 
            while ($rows=mysqli_fetch_assoc($result)){

        ?>
            <tr>
                <td><?php echo $rows['task_title'];?></td>
                <td><?php echo $rows['task_description'];?></td>
                <td><?php echo $rows['task_codigo_identificador'];?></td>
                <td><?php echo $rows['task_status'];?></td>
            </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>