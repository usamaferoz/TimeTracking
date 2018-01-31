<?php

/**
 * Created by PhpStorm.
 * User: feroz
 * Date: 1/30/2018
 * Time: 1:02 PM
 */
class User_model extends CI_Model {

    function __construct(){
        parent::__construct(); // construct the Model class
    }

    public function get_user($id){

        $sql = "SELECT * FROM USER WHERE id = ? ";
        $query = $this->db->query($sql, array($id));
            foreach ($query->result() as $row)
            {
                echo $row->first_name;
                echo $row->last_name;
                echo $row->age;
            }
    }

}