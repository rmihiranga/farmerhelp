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
    <br></br>

    <!-- Main content -->
    <div class="container">
    <ul1>
        <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile1"></i> ඒකාබද්ධ පළිබෝධ පාලනය හැදින්වීම​</a></li>
        <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile2"></i> ඒකාබද්ධ පළිබෝධ පාලන උපක්&zwj;රම​</a></li>
        
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile3"></i> වී වගාවේ පළිබෝධ පාලන උපක්&zwj;රම</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile4"></i> වී වගාවේ වෛරස්</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile5"></i> වී වගාවේ රෝග(බැක්ටිරියා)</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/pesticide/profile6"></i> වී වගාවේ රෝග(දිලීර)</a></li>
    
        
    </ul1>
    </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  </body>
  <style>
  ul1 {
  list-style-type: none; /* Remove bullets */
  padding: 0; /* Remove padding */
  margin: 0; /* Remove margins */
}


ul1 li {
  border: 1px solid #ddd; /* Add a thin border to each list item */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Add a grey background color */
  padding: 12px; /* Add some padding */
}
</style>
</html>