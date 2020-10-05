<?php
session_start();

require_once '../../Task/TaskModel.php';
require_once '../../DAO/Connection.php';
require_once '../../DAO/TarefaDAO.php';

$obj = $_SESSION['objeto'];
$identificador_usuario = $obj['codigo_identificador'];


$connection = new Connection();
$connection = $connection -> getConnection();
$taskDAO = new TarefaDAO($connection);
$title = $_POST['task-title'];
$description = $_POST['task-description'];
$beginDate = $_POST['task-begin-date'];

$timeaux = explode('T',$beginDate);
$date = $timeaux[0];
$splitdate = explode('-',$date);
//splitdate[0] - year
//splitdate[1] - month
//splitdate[2] - date
$hour = $timeaux[1];
$splittime = explode(':',$hour);
// splittime[0] - hours
//splittime[1] - minutes
$splittime[3] = '00';

$beginDate = mktime($splittime[0],$splittime[1],$splittime[3],$splitdate[1],$splitdate[2],$splitdate[0]);
$taskmodel = new TaskModel($identificador_usuario,$title,$description,$beginDate);
$taskDAO -> addTask($taskmodel);




?>