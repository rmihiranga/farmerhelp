<?php 
   class Email extends CI_Controller { 
  
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
    
            $this->load->library('email');

      } 

      public function index() { 
	
         $this->load->helper('form'); 
        // $this->load->view('email_form'); 
      } 
  
      function sendMail($msg,$receiver)
      {
          $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'laahirudulanjaya@gmail.com', 
        'smtp_pass' => 'passward1223', 
        'mailtype' => "html",
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      );
        
              $message = urldecode($msg);
              $this->load->library('email', $config);
              $this->email->initialize($config);

            $this->email->set_newline("\r\n");
            $this->email->from('laahirudulanjaya@gmail.com'); 
            $this->email->to($receiver);
            $this->email->subject('Farmer help Expert\'s account');
            $this->email->message($message);
            if($this->email->send())
           {
               echo $message;
            echo 'Email sent.';
            redirect(base_url()."index.php/Expert/experts","refresh");
           }
           else
          {
           show_error($this->email->print_debugger());
          }
      
      }
      function sendMailtoexpert()
      {
          $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'laahirudulanjaya@gmail.com', 
        'smtp_pass' => 'passward1223', 
        'mailtype' => "html",
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      );
        
              $message = "New farmer Problem is posted ";
              $this->load->library('email', $config);
              $this->email->initialize($config);

            $this->email->set_newline("\r\n");
            $this->email->from('laahirudulanjaya@gmail.com');
            $this->email->to('laiyalaiyalaiya@gmail.com');
            $this->email->subject('New Farmer Problem');
            $this->email->message($message);
            if($this->email->send())
           {
            
            echo  "<script> alert('we inform your problem');</script>";
            //redirect(base_url()."index.php/Expert/experts","refresh");
           }
           else
          {
           show_error($this->email->print_debugger());
          }
      
      }
    }
    ?>