<?php
session_start();

require_once '../../Task/TaskModel.php';
require_once '../../DAO/Connection.php';
require_once '../../DAO/TarefaDAO.php';

$identificador_usuario = $_SESSION['identificador'];
$connection = new Connection();
$connection = $connection -> getConnection();
$taskDAO = new TarefaDAO($connection);
$title = $_POST['task-title'];
$description = $_POST['task-description'];
$beginDate = $_POST['task-begin-date'];

$timeaux = explode('T',$beginDate);
$date = $timeaux[0];
$hour = $timeaux[1];
$beginDate = $date." ".$hour.":00";

$taskmodel = new TaskModel($identificador_usuario,$title,$description,$beginDate);
$taskDAO -> addTask($taskmodel);




?>