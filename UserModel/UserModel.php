<?php

class UserModel
{
    private $identifierCode;
    private $login;
    private $password ;

    public function __construct($identifierCode, $login, $password)
    {
        $this -> identifierCode = $identifierCode;
        $this -> login = $login;
        $this -> password = $password;
    }

    public function setIdentifier($identifier){
        if ($identifier != null){
            $this -> identifierCode = $identifier;
        }
    }

    public function getIdentifierCode(){
        return $this -> identifierCode;
    }

    public function setLogin($login){
        if ($login != null){
            $this -> login = $login;
        }
    }

    public function getLogin(){
        return $this -> login;
    }

    public function setPassword($password){
        if ($password != null){
            $this -> password = $password;
        }
    }

    public function getPassword(){
        return $this -> password;
    }
    

    
}

?>