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
ඒකාබද්ධ පළිබෝධ පාලනය
        
      
    </section>

    <!-- Main content -->
    <div class="content-wrapper">
    <ul>
        <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile1"></i> ඒකාබද්ධ පළිබෝධ පාලනය හැදින්වීම​</a></li>
        <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile2"></i> ඒකාබද්ධ පළිබෝධ පාලන උපක්&zwj;රම​</a></li>
        
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile3"></i> වී වගාවේ පළිබෝධ පාලන උපක්&zwj;රම</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile4"></i> වී වගාවේ වෛරස්</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile5"></i> වී වගාවේ රෝග(බැක්ටිරියා)</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile6"></i> වී වගාවේ රෝග(දිලීර)</a></li>
    
        
    </ul>
    </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  </body>
</html>