<?php
Class Message_model extends CI_model{
    public function savemessage($data)
    {
        {
            $this->db->insert('messages',$data);
            $message_id = $this->db->insert_id();
        }
        return $message_id;
    }

    public function getmessages()
    {
       $query= $this->db->get('messages');
       $res = $query->result();
       return $res;
    }
} 
?>