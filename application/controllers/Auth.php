<?php

class Auth extends CI_Controller{

    public function login(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        if($this->form_validation->run() == TRUE){
            echo'form validated';

            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->db->select('*');
            $this->db->from('register');
            $this->db->where(array('username' => $username, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();

            if($user->email){
                $this->session->set_flashdata("success","Login successfull");

                $_SESSION['user_logged']=TRUE;
                $_SESSION['username'] = $user->username;

                redirect("user/profile", "refresh");
            }else{
                $this->session->set_flashdata("error","Invalid Credentials!");
                redirect("auth/login", "refresh");
            }
        }
        
        $this->load->view('login.php');
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
                    'gender' => $_POST['gender'],
                    'district' => $_POST['district'],
                    'phone' => $_POST['phone'],
                );

                $this->db->insert('register',$data);

                $this->session->set_flashdata("success","Registration successfull");
            }
        }
        
        $this->load->view('register.php');
    }
}

?>