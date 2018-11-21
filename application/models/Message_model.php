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
} 
?>