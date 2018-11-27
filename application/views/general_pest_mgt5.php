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
<div class="sppb-row">
        <div class="sppb-col-sm-2">
            <div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms"></div>
        </div>
        <div class="sppb-col-sm-10 ">
            <div class="sppb-addon-container" style="padding:10px 10px 10px 10px;">
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <p><strong><span style="font-size: 14pt;">ක්ෂේත‍්‍රයේදී වැළඳෙන රෝග</span></strong></p>
                        
                        <span style="font-size: 14pt;"><strong>පිටිපුස් රෝගය</strong><br /><span style="font-size: 12pt;">තවානේදී මෙන්ම ක්ෂේත‍්‍රයේදී ද දක්නට ලැබෙන රෝගයකි. වියළි සහ උෂ්ණත්වය වැඩි පරිසර තත්ත්ව වලදී මෙම රෝගය බහුලව වැළඳේ. පිටි වැනි සුදු පැහැති පැල්ලම් පත‍්‍ර වල උඩු පෘෂ්ඨයේ දැක ගත හැකි වේ. මෙම සුදු පැහැයට හේතුව වන්නේ එරිසිපේ විශේෂයේ (<em>Erysiphe spp.</em>)දිලීර ඇතුළු වෙනත් දිලීර කාණ්ඩයන්ය. ආසාදිත පත‍්‍ර අවපැහැ වී අනතුරුව කහ පැහැයක් දක්වයි. ආසාදනය උග‍්‍ර වූ විට පත‍්‍ර රැවුලි වැටී මැරී යාම සහ අවසානයේ ශාකයෙන් වෙන් වී හැලී යයි.</span></span></p>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/piti_weni_sudu_pellam_athi_weema.jpg" alt="">
                    </div>
                </div>
                <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <p><strong><span style="font-size: 14pt;">රෝග පාලනය</span> </strong></p>
                        <p style="text-align: justify;"><span style="font-size: 12pt;">තවාන් පාත්ති ජීවානුහරණය නිර්දේශ කරන අතර තවානෙහි ඉතා හොඳ ජල වහන තත්ත්වයක් පැවතිය යුතුය. බීජ සඳහා උණු වතුර ප‍්‍රතිකාර කිරීම,ක්ෂේත‍්‍රය පිරිසිදුව තබා ගැනීම, ධාරක ශාක විනාශ කිරීම හා භෝග මාරුව කළ යුතුය.විධිමත් ලෙස තවාන් නඩත්තු කිරීම මඟින් රෝගය පාලනය කළ හැකිය. <br /></span></p>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/haniY_ugra_u_awastawk.jpg" alt="">
                    </div>
                </div>
                <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
            </div>
        </div>
    </div>
    
    </section>
    <!-- /.content -->
  </div>
</body>
</html>