<?php
Class Expert_model extends CI_model{
    public function getallexperts()
    {
        $record_set = array();
        $query=$this->db->query("SELECT * FROM expert");
        return $query->result();   
    }
} 
?>