<?php
Class Member_model extends CI_model{
    public function member()
    {
        $this->load->model('Auth_model');
        $data['post']=$this->Auth_model->getallusers();
        $this->load->view('members',$data);
    }
    function delete_member($id){
        $this->db->where('id', $id);
        $this->db->delete('register');
        }
    function update_member($id,$data){
            $this->db->where('id', $id);
            $this->db->update('register', $data);
            }
    
            public function getallusers()
            {
                $record_set = array();
                $query=$this->db->query("SELECT * FROM register where type='0'");
                return $query->result();   
            }
} 
?>