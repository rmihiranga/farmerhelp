
<?php

class Member extends CI_Controller{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('Member_model');
        $this->load->helper(array('form','url'));
        $this->load->helper('url');
    }

public function members()
    {
    
        $this->load->model('Member_model');
        $data['post']=$this->Member_model->getallusers();
        $this->load->view('members',$data);
    
        if(isset($_POST['Update'])) {
            
            $id= $_POST['id'];
            $data = array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'gender' => $_POST['gender'],
                'district' => $_POST['district'],
                'phone' => $_POST['phone'],
                
            );
             $this->Member_model->update_member($id,$data);
            }
    }

    function delete_member() {
        $this->load->model('Member_model');
        $id = $this->uri->segment(3);
        $this->Member_model->delete_member($id); 
        redirect(base_url()."index.php/Member/members", "refresh");

       
        }
    

   

}