<?php

/**
 * Created by PhpStorm.
 * User: feroz
 * Date: 1/30/2018
 * Time: 1:01 PM
 */
class User_controller extends CI_Controller {

    public function index(){
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";
        $this->load->model('User_model' , 'myuser');
        echo $this->myuser->get_user(1);
        $this->load->view('user', $data);
    }

    public function signin($post){
        echo 'asaddsa';
        exit(0);
    }
}