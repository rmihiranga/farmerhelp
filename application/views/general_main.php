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
        <small>දිළීර​</small>
      
    </section>

    <!-- Main content -->
    <div class="content-wrapper">
    <ul>
        <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile1"></i> දියමලංකෑම​</a></li>
        <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile2"></i> කෘසිපරේසියේ කුලයේ භෝග වලට වැළඳෙන රෝග සහ රෝග පාලනය​</a></li>
        <ul>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile3"></i> වළයාකාර පුල්ලි රෝගය/ගෙඹි ඇස් රෝගය</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile4"></i> නම්‍යශීලී කඳක් ඇති වීම (Wire stem)</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile5"></i> පිටිපුස් රෝගය​</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile6"></i> යටිපුස් රෝගය</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile7"></i> ස්ක්ලෙරෝටියම් මෘදු කුණුවීම​</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile8"></i> බීට්වලට වැළඳෙන රෝග</a></li>
        </ul>
        
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