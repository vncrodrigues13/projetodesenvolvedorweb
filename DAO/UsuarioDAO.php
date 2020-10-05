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
    


    public function autenticar($login, $senha){
        $sql = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha';";
        $result = mysqli_query($this -> connection, $sql);
        
        while ($registro = mysqli_fetch_array($result)){
            return $registro;
        }
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


    public function existElements($usuario){
        $identifier = $usuario -> getIdentifierCode();
        $login = $usuario -> getLogin();
        $sql = "SELECT * FROM usuario WHERE login = '$login' OR codigo_identificador = '$identifier'";
        $query = mysqli_query($this -> connection,$sql);
        return mysqli_num_rows($query) != 0;
        //caso o usuario ja exista um usuario com o mesmo login ou identificador
    }

    

    


}
