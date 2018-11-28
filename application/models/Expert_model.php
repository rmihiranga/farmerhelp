<?php
Class Expert_model extends CI_model{
    public function getallexperts()
    {
        $record_set = array();
        $query=$this->db->query("SELECT * FROM expert");
        return $query->result();   
    }
    function delete_expert($id){
        $this->db->where('id', $id);
        $this->db->delete('expert');
        }
    function update_expert($id,$data){
            $this->db->where('id', $id);
            $this->db->update('expert', $data);
            }
    
} 
?>