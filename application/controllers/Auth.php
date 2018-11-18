<?php

class Auth extends CI_Controller{

    public function login(){
        echo 'login page';
    }

    public function register(){
        $this->load->view('registerExpert.php');
    }
}

?>