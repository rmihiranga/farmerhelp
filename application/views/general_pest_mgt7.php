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
                        <p><strong><span style="font-size: 14pt;">ක්ෂේත&zwj;්&zwj;රයේදී වැළඳෙන රෝග</span></strong></p>
                        
                        <br />
                        <div style="text-align: justify;"><span style="font-size: 12pt;"><strong><br />ස්ක්ලෙරෝටියම් මෘදු කුණුවීම</strong></span>
                        </div>
                        <p style="text-align: justify;"><span style="font-size: 12pt;">ස්ක්ලෙරෝටියම් රොල්ප්සි (<em>Sclerotinium rolpsi</em>) නම් දිලීරය නිසා ඇති වන තත්ත්වයකි. පත&zwj;්&zwj;රවලට මෙන්ම ගෙඩිවලටද හානි ඇති කරයි. සුදු පැහැති දිලීර සූත&zwj;්&zwj;රිකා පත&zwj;්&zwj;ර මත මෙන්ම පත&zwj;්&zwj;ර නටුව මතද ගෙඩි හටගත් පසු ගෙඩි මතද වර්ධනය වේ. හානියට ලක්වී කල් ගත වූ පසු සුදු පැහැ&nbsp; දිලීර ජාල කළු පැහැයෙන් පෙනෙන අතර හානියට ලක් වූ ශාක කොටස කුණු වී සම්පුර්ණයෙන්ම විනාශ වේ.මෙම දිලීර ජාල අහිතකර තත්ත්ව මඟ හැරීම සඳහා ඉතා තද, භෞතික තත්ත්ව මඟින් විනාශ නොවන ස්ක්ලෙරෝටිියා නම් කාලතරණ ව්&zwj;යුහ සාදයි.</span></p>
                    </div>
                </div>
                <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/asadanayta_lak_vu_gova.jpg" alt="">
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <p style="text-align: justify;"><strong><span style="font-size: 14pt;">රෝග පාලනය</span></strong><br />
                        <span style="font-size: 12pt;">ක්‍ෂේත‍්‍රය ඉතා පිරිසිදුව තබා ගැනීම, පෙර වගාවේ භෝග අවශේෂයන් ක‍්‍රමවත්ව ඉවත් කිරීම සහ භෝගයේ සනීපාරක්‍ෂාව පවත්වා ගැනීම මඟින් මෙම රෝග කාරකය ක්‍ෂේත‍්‍රයේ පැතිරීම පාලනය කළ හැක.  මෙම දිලීර ජාල කාලතරණ ව්‍යුහ සෑදීමට පෙර නිර්දේශිත දිලීර නාශකයක් යෙදීම මඟින් පාලනය කළ යුතුය. </span></p>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kshethraa_clean_tha_ganima.jpg" alt="">
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