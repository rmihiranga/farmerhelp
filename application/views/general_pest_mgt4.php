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
        <div class="sppb-col-sm-10">
            <div class="sppb-addon-container" style="">
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <div style="text-align: justify;">
                            <strong><span style="font-size: 14pt;">ක්ෂේත‍්‍රයේ යේදී වැළඳෙන රෝග</span></strong><br />
                            <span style="font-size: 12pt;">කෘසිපරේසියේ කුලයේ භෝග වලට වැළඳෙන රෝග සහ රෝග පාලනය</span>
                        </div>
                        <div style="text-align: justify;">
                            <span style="font-size: 12pt;">මෙම කුලයට අයත් භෝග අතරින් ගෝවා, මල් ගෝවා, චීන ගෝවා, නෝකෝල්, රාබු, බෘකොලි යන භෝග වල රෝග සහ රෝග පාලනය පිළිබඳව විමසා බලමු.</span>
                        </div>
                        <div style="text-align: justify;">
                            <span style="font-size: 12pt;">
                            <strong><br /><span style="font-size: 14pt;">නම්‍යශීලී කඳක් ඇති වීම : (Wire stem)</span></strong></span>
                        </div>
                        <div style="text-align: justify;">
                            <span style="font-size: 12pt;">මෙයද රයිසොක්ටෝනියා කාණ්ඩයට අයත් දිලීරයක් මඟින් ඇතිවන රෝගී තත්ත්වයකි.ගෝවා අයත් කෘසිපරේසියේ කුලයේ සියළුම භෝගවල දක්නට ලැබෙන රෝගයකි.</span><br>
                        </div>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/namyashili_kadak_athi_weema.JPG" alt="">
                    </div>
                </div>
                <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;">
            </div>
            <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                <div class="sppb-addon-content">
                    <div style="text-align: justify;">
                        <span style="font-size: 12pt;">දිගට විහිදුණු නැමෙනසුළු කඳක් සහිත වන අතර පාදස්ථය මූල පද්ධතිය අසලින් නැමී වැටේ. හානිය උග‍්‍ර වූ විට සනාල පටක අවහිර වී පැළය මැරී යයි. මෙම රෝගය වළක්වා ගැනීම සඳහා තවාන් පාත්ති ජීවානුහරණය කිරීම සහ බීජ ප‍්‍රතිකාර කිරීම නිර්දේශිත අතර රෝග පාලනය සඳහා නිර්දේශිත දිලීර නාශකයක් පසට යෙදිය යුතුය.</span>
                    </div>
                </div>
            </div>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                <div class="sppb-addon-content">
                    <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/haniya_ugra_vu_awasthawk.jpg" alt="">
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