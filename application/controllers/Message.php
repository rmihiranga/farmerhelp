<?php

class Message extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('Message_model');
        $this->load->helper(array('form','url'));
        $this->load->helper('url');
    }
    public function chatboxx(){
        $this->load->view('chatbox');
        $this->load->helper('url');
    }
    public function chatbox(){
        $save =array(
            'comment_id'=> $this->input->post('comment_id'),
            'name'=> $this->input->post('name'),
            'message' => $this->input->post('message'),
            'date' => date('Y-m-d H:i:s')

        );
        $this->Message_model->savemessage($save);
        //redirect('')
    }
   
    public function chatlist(){

    }
    

}

?>