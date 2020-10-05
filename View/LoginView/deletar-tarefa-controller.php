<?php 
session_start();

include '../../DAO/Connection.php';
include '../../DAO/TarefaDAO.php';

$connection = new Connection();
$conn = $connection -> getConnection();

$tarefaDAO = new TarefaDAO($conn);

$objeto = $_SESSION['objeto'];
$objeto = $objeto['codigo_identificador'];

$inputUserTaskID = $_POST['taskid-by_user'];

$result = $tarefaDAO -> getTaskByTaskID($inputUserTaskID);
$columns = mysqli_num_rows($result);
if ($columns != 0){
    while ($rows = mysqli_fetch_assoc($result)){
        
        if ($rows['user_identifier_code'] == $objeto){
            $tarefaDAO -> deleteTask($inputUserTaskID);
        }
    }
    header('Location: UserView.php');
    exit();
}else{
    $_SESSION['not-found-task'] = true;
    header('Location: UserView.php');
    exit();
}





?>