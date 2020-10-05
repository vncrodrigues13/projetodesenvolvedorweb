<?php

class Connection{

    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '123456';
    private $banco = 'web_development';
    private $conn;
    public static $value = 0;

    public function __construct()
    {
        $this -> host = 'localhost';
        $this -> usuario = 'root';
        $this -> senha = '123456';
        $this -> banco = 'web_development';
        $this -> conn = mysqli_connect($this -> host,$this -> usuario,$this -> senha,$this -> banco);
        
    }

    public function getConnection(){
        return $this -> conn;
    }


}
    
?>