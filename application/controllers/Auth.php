<?php

class Auth extends CI_Controller{

    public function login(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        if($this->form_validation->run() == TRUE){
            echo'form validated';

            $username = $_POST['username'];
            $password = $_POST['password'];
            //$typp = $this->db->query("SELECT type FROM register where username='$username'");
            $this->db->select('*');
            $this->db->from('register');

            $this->db->where(array('username' => $username, 'password' => $password));
            $query = $this->db->get();
            
            $user = $query->row();
            $typp=$user->type;
            if($user->email){

               $session_data = array(
                   'username'=>$username,
                   'type'=>$typp
               );
               $_SESSION['user_logged']=TRUE;
                $this->session->set_userdata($session_data);
                echo $this->session->userdata['username'];

                redirect(base_url(), "refresh");
            }else{
                $this->session->set_flashdata("error","Invalid Credentials!");
                redirect("auth/login", "refresh");
            }
        }
        
        $this->load->view('login.php');
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $_SESSION['user_logged']=FALSE;
        redirect(base_url(), "refresh");

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
    public function frame(){
        $this->load->view('component/admin_frame');
    }

    public function member()
    {
        $this->load->model('Auth_model');
        $data['post']=$this->Auth_model->getallusers();
        $this->load->view('members',$data);
    }
    
}

?>