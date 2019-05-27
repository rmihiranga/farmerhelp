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
            $this->form_validation->set_rules('phone', 'Phone', 'required|max_length[10]');

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
        if(isset($_POST['Update'])) {
            $this->load->model('Expert_model');
            $id= $_POST['id'];
            $data = array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
            );
             $this->Expert_model->update_expert($id,$data);
            }
    }
    function delete_expert() {
        $this->load->model('Expert_model');
        $id = $this->uri->segment(3);
        $this->Expert_model->delete_expert($id); 
        redirect(base_url()."index.php/Expert/experts", "refresh");

        }
        function update_expert(){
            if(isset($_POST['Update'])) {
            $this->load->model('Expert_model');
            $id= $_POST['id'];
            $data = array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
            );
             $this->Expert_model->update_expert($id,$data);
            }
            $this->load->view('manageexperts');
        }
    

}