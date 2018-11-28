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
        'smtp_user' => 'laahirudulanjaya@gmail.com', // change it to yours
        'smtp_pass' => 'passward1223', // change it to yours
        'mailtype' => "html",
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      );
        
              $message = urldecode($msg);
              $this->load->library('email', $config);
              $this->email->initialize($config);

            $this->email->set_newline("\r\n");
            $this->email->from('laahirudulanjaya@gmail.com'); // change it to yours
            $this->email->to($receiver);// change it to yours
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
    }
    ?>