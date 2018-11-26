<?php

class Auth_model extends CI_model{
    public function __construct()
    {
        parent::__construct();
        
    }


public function getallusers(){
    $record_set = array();
    $query=$this->db->query("SELECT * FROM register where type='0'");
    return $query->result();

   
}
}

?>