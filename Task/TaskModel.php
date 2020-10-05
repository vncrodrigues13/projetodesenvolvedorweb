<?php 

class TaskModel
{
    private $identifierCodeTask;
    private $title;
    private $description;
    private $beginDate;
    private $endDate;
    private $userID;
    private $status;


    public function __construct($userID, $title, $description, $beginDate)
    {

        $this -> beginDate = (date('Y-m-d H:i:s',$beginDate));
        $this -> identifierCodeTask = (date('dmY',$beginDate));
        $this -> userID = $userID;
        $this -> title = $title;
        $this -> description = $description;
        $this -> endDate = null;
        $this -> status = 1;
    }

    public function setIdentiferCodeTask($identifierCodeTask){
        if ($identifierCodeTask != null){
            $this -> identifierCodeTask = $identifierCodeTask;
        }
    }

    public function getIdentiferCodeTask(){
        return $this -> identifierCodeTask;
    }

    public function setTitle($title){
        if ($title != null){
            $this -> title = $title;
        }
    }

    public function getTitle(){
        return $this -> title;
    }

    public function setDescription($description){
        if ($description != null){
            $this -> description = $description;
        }
    }

    public function getDescription(){
        return $this -> description;
    }

    public function setBeginDate($beginDate){
        if ($beginDate != null){
            $this -> beginDate = $beginDate;
        }
    }

    public function getBeginDate(){
        return $this -> beginDate;
    }

    public function setEndDate($endDate){
        if ($endDate != null){
            $this -> endDate = $endDate;
        }
    }

    public function getEndDate(){
        return $this -> endDate;
    }

    public function setUserID($user){
        if ($user != null){
            $this -> userID = $user;
        }
    }

    public function getUserID(){
        return $this -> userID;
    }

    public function setStatus($status){
        if ($status != null){
            $this -> status = $status;
        }
    }

    public function getStatus(){
        return $this -> status;
    }

}


?>
