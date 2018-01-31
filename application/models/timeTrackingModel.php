<?php

/**
 * Created by PhpStorm.
 * User: feroz
 * Date: 1/31/2018
 * Time: 11:01 AM
 */
class timeTrackingModel extends CI_Model {

    function __construct(){
        parent::__construct(); // construct the Model class
    }

    public function createTask($desc,$duration){

         $sql = "INSERT INTO task (description,duration,start_timestamp) value (?,?,now())";
        if($query = $this->db->query($sql, array($desc,$duration))){
            return true;
        }else{
            return false;
        }
    }

    public function startTask($task){

        $sql = "INSERT INTO duration (id,start_timestamp,creation_timestamp) value (?,now(),now())";
        if($query = $this->db->query($sql, array($task))){
            return true;
        }else{
            return false;
        }
    }

    private function updateTask($task,$min){
        $sql = "INSERT INTO durations (id,start_timestamp,creation_timestamp) value (?,now(),now())";
        if($query = $this->db->query($sql, array($task))){
            return true;
        }else{
            return false;
        }
    }

    private function getLastDuration($task){
        $sql = "SELECT duration FROM durations where task_id = ?";
        if($query = $this->db->query($sql, array($task))){
            $row = $query->result();
            return $query->result_array() ;
        }else{
            return false;
        }
    }

    public function getTask(){

        $sql = "SELECT id,title FROM task";
        if($query = $this->db->query($sql)){
            return $query->result_array() ;
        }else{
            return false;
        }
    }

    public function updateEveryMinute($post){

    }

}