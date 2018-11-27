<?php

class Expert extends CI_Controller{

    public function expertt(){
        $this->load->view('expert');
    }


    public function register(){
        
        if(isset($_POST['register'])) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('confirmPassword', 'ConfirmPassword', 'required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');

            if($this->form_validation->run() == TRUE){
                echo'form validated';
                
                $data = array(
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                );

                $this->db->insert('expert',$data);

                $this->session->set_flashdata("success","Registration successfull");
            }
        }
        
        $this->load->view('expert');
    }
    public function manage(){
        $this->load->view('manageexperts');
    }
    public function experts()
    {
        $this->load->model('Expert_model');
        $data['post']=$this->Expert_model->getallexperts();
        $this->load->view('manageexperts',$data);
    }
    

}