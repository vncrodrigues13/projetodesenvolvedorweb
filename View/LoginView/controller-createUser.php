<?php 
session_start();
include ('../../DAO/Connection.php');
include ('../../DAO/UsuarioDAO.php');
require_once ('../../UserModel/UserModel.php');

$connection = new Connection();
$connection = $connection -> getConnection();

$userDAO = new UsuarioDAO($connection);

if (empty($_POST['login-user']) || empty($_POST['id-user']) || empty($_POST['senha-user'])){
    header('Location: cadastrarView.php');
    exit();
}

$login = mysqli_real_escape_string($connection,$_POST['login-user']);
$senha = mysqli_real_escape_string($connection,$_POST['senha-user']);
$identificador = mysqli_escape_string($connection,$_POST['id-user']);


$modeloObjeto = new UserModel($identificador,$login,$senha);

if (!$userDAO -> existElements($modeloObjeto)){
    $userDAO -> addUser($modeloObjeto);
    header('Location: index.php');
    exit();
}else{
    header('Location: cadastrar-usuario-View.php');
    exit();
}


?>