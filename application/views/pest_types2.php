<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($_SESSION['user_logged'] ){
  if($this->session->userdata['type']==1){
    $this->load->view('component/admin_frame');
  }
  else{
    $this->load->view('component/frame');
  }
  }else{
    $this->load->view('component/frame');
  }


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>
      පළිබෝධ වර්ග​
        <small>බැක්ටීරියා</small><br>
      
    </section>
    </section>
    <section class="content-header">
    <!-- Main content -->

    </section>
    <!-- /.content -->
  </div>
</body>
</html>