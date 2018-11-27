<?php
class Search_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("messages");
  if($query != '')
  {
   $this->db->like('comment_id', $query);
   $this->db->or_like('name', $query);
   $this->db->or_like('parent_id', $query);
   $this->db->or_like('date', $query);
   $this->db->or_like('message', $query);
  }
  $this->db->order_by('comment_id', 'DESC');
  return $this->db->get();
 }
}
?>