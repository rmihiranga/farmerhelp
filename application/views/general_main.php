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
පළිබෝධ පාළනය​
        <small>ඒකාබද්ධ පළිබෝධ​</small>
      
    </section>
    <br></br>

    <!-- Main content -->
    <div class="container">
      
    <ul1>
        
        <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile2"></i> කෘසිපරේසියේ කුලයේ භෝග වලට වැළඳෙන රෝග සහ රෝග පාලනය​</a></li>
        <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile1"></i> දියමලංකෑම​</a></li> 
        <ul2>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile3"></i> වළයාකාර පුල්ලි රෝගය/ගෙඹි ඇස් රෝගය</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile4"></i> නම්‍යශීලී කඳක් ඇති වීම (Wire stem)</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile5"></i> පිටිපුස් රෝගය​</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile6"></i> යටිපුස් රෝගය</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile7"></i> ස්ක්ලෙරෝටියම් මෘදු කුණුවීම​</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile8"></i> බීට්වලට වැළඳෙන රෝග</a></li>
        </ul2>
        
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