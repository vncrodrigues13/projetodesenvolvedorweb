<?php
session_start();
include ('../../DAO/Connection.php');
include ('../../DAO/UsuarioDAO.php');


$connection = new Connection();
$connection = $connection -> getConnection();

$userDao = new UsuarioDAO($connection);

if (empty($_POST['login-user']) || empty($_POST['senha-user'])){
    header('Location: index.php');
    exit();
}

$login = mysqli_real_escape_string($connection,$_POST['login-user']);
$senha = mysqli_real_escape_string($connection,$_POST['senha-user']);

$element = $userDao -> autenticar($login,$senha);

if($element != null){
    $_SESSION['objeto'] = $element;
    header('Location: UserView.php');
    exit();
}else{
    $_SESSION['nao-existe-usuario'] = true;
    header('Location: index.php');
    exit();
}

unset($_SESSION['objeto']);

?>