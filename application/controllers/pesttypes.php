<?php

class pesttypes extends CI_Controller{

    
    public function type1(){
            $this->load->view('pest_types1.php');
    }

    public function type2(){
        $this->load->view('pest_types2.php');
    }

    public function type3(){
        $this->load->view('pest_types3.php');
    }

}
