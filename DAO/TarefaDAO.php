<?php 



class TarefaDAO{
    
    private $connection;


    public function __construct($conn)
    {
        $this -> connection = $conn;
    }


    public function addTask($taskModel){
        $task_id = $taskModel -> getIdentiferCodeTask();
        $task_title = $taskModel -> getTitle();
        $task_descript = $taskModel -> getDescription();
        $task_beginDate = $taskModel -> getBeginDate();
        $task_endDate = $taskModel -> getEndDate();
        if ($task_endDate == null){
            $task_endDate = $task_beginDate;
        }
        $user_id = $taskModel -> getUserID();
        $task_status = $taskModel -> getStatus();
        $sql = "INSERT INTO tarefa VALUES ";
        $sql .="('$task_id','$task_title','$task_descript','$task_beginDate','$task_endDate','$user_id','$task_status');";
        mysqli_query($this -> connection,$sql) or die ('error');
        mysqli_close($this -> connection);
    }


    public function selectAll(){
        $sql = "SELECT * FROM tarefa";
        $result = mysqli_query($this -> connection, $sql);
        mysqli_close($this -> connection);
        return $result;
    }

    public function getTaskByTaskID($idTask){
        $sql = "SELECT * FROM tarefa WHERE task_codigo_identificador = '$idTask';";
        $result = mysqli_query($this -> connection, $sql);
        mysqli_close($this -> connection);
        return $result;
    }

    public function getTaskByUserID($userID){
        $sql = "SELECT * FROM tarefa WHERE user_identifier_code = '$userID';";
        $result = mysqli_query($this -> connection, $sql);
        mysqli_close($this -> connection);
        return $result;
    }

    public function updateTask($taskModel){
        $task_title = $taskModel -> getTitle();
        $task_descript = $taskModel -> getDescription();
        $task_beginDate = $taskModel -> getBeginDate();
        $task_endDate = $taskModel -> getEndDate();
        $user_id = $taskModel -> getUserID();
        $task_status = $taskModel -> getStatus();
        
        $sql = "UPDATE tarefa SET task_title = '$task_title', task_description = '$task_descript', task_begin_date = '$task_beginDate'";
        $sql .="task_end_date = '$task_endDate', user_identifier_code = '$user_id', task_status = '$task_status';";
        mysqli_query($this -> connection, $sql);
        mysqli_close($this -> connection);
    }

    public function deleteTask($taskID){
        $sql = "DELETE FROM tarefa WHERE task_codigo_identificador = '$taskID';";
        mysqli_query($this -> connection, $sql);
        mysqli_close($this -> connection);
    }




}



?>