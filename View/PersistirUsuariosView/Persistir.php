<?php 
date_default_timezone_set('America/Recife');
require_once '../../DAO/Connection.php';

$connectivity = new Connection();
$connectivity = $connectivity -> getConnection();


    echo "<table border = 1>";
    echo "<tr>";
    echo "<th>LOGIN</th>";
    echo "<th>SENHA</th>";
    echo "<th>IDENTIFICADOR</th>";
    echo "</tr>";
    $sql = 'SELECT * FROM usuario';
    $result = mysqli_query($connectivity,$sql) or die ("Erro ao tentar buscar registro de usuarios");
    while ($registro = mysqli_fetch_array($result)){
        $user_login = $registro['login'];
        $user_senha = $registro['senha'];
        $user_id = $registro['codigo_identificador'];
        echo "<tr>";
        echo "<td>".$user_login."</td>";
        echo "<td>".$user_senha."</td>";
        echo "<td>".$user_id."</td>";
        echo "</tr>";
    }
    mysqli_close($connectivity);
    echo "</table>";
?>