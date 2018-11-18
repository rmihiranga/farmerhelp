<?php

class Message extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('Message_model');
        $this->load->helper(array('form','url'));
    }
    public function chatboxx(){
        $this->load->view('chatbox');

    }
    public function chatbox(){
        $save =array(
            'registrationnumber'=> '1',
            'name'=> $this->input->post('name'),
            'message' => $this->input->post('message')

        );
        $this->Message_model->savemessage($save);
        //redirect('')
    }

}

?>