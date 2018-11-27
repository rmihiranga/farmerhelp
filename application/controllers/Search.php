<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

 function index()
 {
  $this->load->view('Search.php');
 }

 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('Search_model');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->Search_model->fetch_data($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Comment ID</th>
       <th>Name</th>
       <th>Parent ID</th>
       <th>Date</th>
       <th>Message</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->comment_id.'</td>
       <td>'.$row->name.'</td>
       <td>'.$row->parent_id.'</td>
       <td>'.$row->date.'</td>
       <td>'.$row->message.'</td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}