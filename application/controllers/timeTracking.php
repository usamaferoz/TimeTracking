<?php

/**
 * Created by PhpStorm.
 * User: feroz
 * Date: 1/31/2018
 * Time: 11:01 AM
 */
class timeTracking extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    public function main(){
        if($_POST['do'] == 'start'){
            $this->startTask($_POST['task']);;
        }else
        exit(0);
    }

    private function createTask($desc,$duration){

        $this->load->model('timeTrackingModel');
        if($this->timeTrackingModel->createTask($desc,$duration) == true){
            echo 1 ;
        }else{
            echo 0;
        }
        exit(0);
    }

    private function createTask($task){
        $this->load->model('timeTrackingModel');
        if($this->timeTrackingModel->startTask($task) == true){
            echo 1 ;
        }else{
            echo 0;
        }
        exit(0);
    }
}