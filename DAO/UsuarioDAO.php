<?php 

include ('../../UserModel/UserModel.php');

class UsuarioDAO{
    
    private $connection;

    public function __construct($conn)
    {
        $this -> connection = $conn; 
    }


    public function addUser($user){
        $identifier = $user -> getIdentifierCode();
        $login = $user -> getLogin();
        $senha = $user -> getPassword();
        $sql = "INSERT INTO usuario VALUES";
        $sql .= "('$login','$senha','$identifier')";
        mysqli_query($this -> connection,$sql);
    }

    public function selectAll(){
        $sql = 'SELECT * FROM usuario';
        $result = mysqli_query($this -> connection,$sql) or die ("Erro ao tentar buscar registro de usuarios");
        return $result;
    }
    
    public function exibirAll(){
        echo "<table border = 1>";
        echo "<tr>";
        echo "<th>LOGIN</th>";
        echo "<th>SENHA</th>";
        echo "<th>IDENTIFICADOR</th>";
        echo "</tr>";
        $sql = 'SELECT * FROM usuario';
        $result = mysqli_query($this -> connection,$sql) or die ("Erro ao tentar buscar registro de usuarios");
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
    }


    public function autenticar($login, $senha){
        $sql = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha';";
        $result = mysqli_query($this -> connection, $sql);
        
        while ($registro = mysqli_fetch_array($result)){
            return $registro;
        }
        echo 'Login incorreto';
        return null;
    }

    public function getUserByID($id){
        $sql = "SELECT * FROM usuario WHERE codigo_identificador = '$id'";
        $result = mysqli_query($this -> connection, $sql);

        if ($result['codigo_identificador'] == $id){
            return $result;
        } else{
            return null;
        }
    }

    public function update($usuario){
        $identifier = $usuario -> getIdentifierCode();
        $login = $usuario -> getLogin();
        $senha = $usuario -> getPassword();
        $sql = "UPDATE usuario SET login = '$login', senha = '$senha' WHERE codigo_identificador = '$identifier'";
        mysqli_query($this -> connection,$sql);
    }

    public function deleteUser($user){
        $identifier = $user -> getIdentifierCode();
        $sql = "DELETE FROM usuario WHERE codigo_identificador = '$identifier';";
        mysqli_query($this -> connection, $sql);
    }

    

    


}

?>