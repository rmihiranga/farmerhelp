<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
       
        $this->load->helper('url');
    }
    public function login()
    {
        echo 'login page';
    }

    public function register(){
        $this->load->view('registration/register');
    }
}

?>