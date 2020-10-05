<?php 
session_start();
if (!$_SESSION['objeto']){
    header('Location: index.php');
    exit();
}

?>