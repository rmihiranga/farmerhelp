<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($_SESSION['user_logged'] ){
  if($this->session->userdata['type']==1){
    $this->load->view('adminview');
  }
  else{
    $this->load->view('component/userview');
  }
  }else{
    $this->load->view('component/userview');
  }


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <!--<p>welcome</p>-->
    
</div>
  

</body>
</html>
