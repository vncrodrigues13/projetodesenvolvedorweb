<?php
session_start();
include ('../../DAO/Connection.php');
include ('../../DAO/UsuarioDAO.php');
require_once ('../../UserModel/UserModel.php');


$obj = $_SESSION['objeto'];
$identificador_usuario = $obj['codigo_identificador'];

$connection = new Connection();
$connection = $connection -> getConnection();

$userDao = new UsuarioDAO($connection);

if (empty($_POST['login-user']) || empty($_POST['senha-user'])){
    $_SESSION['alterar-dados-exception'] = true;
    header('Location: alterar-dados-usuario.php');
    exit();
}

$login = mysqli_real_escape_string($connection,$_POST['login-user']);
$senha = mysqli_real_escape_string($connection,$_POST['senha-user']);
$usuarioUpdated = new UserModel($identificador_usuario,$login,$senha);
$userDao -> update($usuarioUpdated);
header('Location: index.php');
exit();

?>