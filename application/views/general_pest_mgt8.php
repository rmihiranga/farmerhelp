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
                        <p><strong><span style="font-size: 14pt;">බීට්වලට වැළඳෙන රෝග</span></strong></p>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">රෝග</span></strong><br /><span style="font-size: 12pt;">බීට්වල ආර්ථිකව වැදගත් වන රෝග කිහිපයක් ඇත. සර්කොස්පෝරා පත‍්‍ර පුල්ලි රෝගය, කළු මුල් රෝගය , කබොළු රෝගය  මින් කිහිපයකි.<br /><br /></span></p>
                        <p><strong><span style="font-size: 14pt;">කළු මුල් රෝගය</span></strong><br /><span style="font-size: 12pt;">මෙම රෝගය බීජ පැළ අවධියේදී බොහෝවිට ඇතිවේ.</span></p>
                        <p style="text-align: justify;"><span style="font-size: 12pt;"> </span></p>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kulumul_rogya.jpg" alt="">
                    </div>
                </div>
                <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <p style="text-align: justify;"><span style="font-size: 12pt;">මේ සඳහා පසේ සිටින ව්‍යාධිජනක දිලීර වර්ග කිහිපයක්ම හේතු විය හැකිය. <em>Rhizoctonia solani</em>, <em>Phoma betal, Aphanomyces cochliodiea, Fusarium</em> <em>spp.</em>, S<em>clerotium rolfsii, </em>iy <em>Phytium spp</em>.බීජ සිටුවා පළමු සති 2 තුලදී ඇතිවන ,දියමලං කෑමේ, තත්ත්වයට ඡුයහඑසමප විශේෂ හේතුවේ. ආසාදිත ස්ථාන කළු පැහැවී මෘදු වේ. බීජ පැළ මැළවී කඩා වැටේ.  <em>Rhizoctonia solani </em> හා <em>Sclerotium </em><em>rolfsii </em>ආසාදනය සෙමෙන් සිදුවන අතර තරමක් වැඩුණු බීජ පැළ ද ආසාදනය වේ.</span></p>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kalu_mul_rogaya_waladunu_awasthawk.jpg" alt="">
                    </div>
                </div>
                <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <div style="text-align: justify;"><span style="font-size: 12pt;">දැකගත හැක. භෝගය පරිණත වනවිට විශේෂයෙන් <em>Rhizoctonia </em>ආසාදනය සිදුවේ. පත‍්‍ර පිළිස්සීම හා මුල්වල වියළි කුණුවීමක් මෙහිදී දැකගත හැක. බීජ පැළ මඟින් මෙම රෝගය ව්‍යාප්ත වියහැකි බැවින් තවාන් පාලනය මැනවින් කළ යුතුය. අර්තාපල් භෝගයට ද මෙම රෝගය වැළඳෙන නිසා අර්තාපල් වගාකළ ඉඩම්වල භෝග සෑදීමේ දී සැලකිලිමත් විය යුතුය.</span>
                    </div>
                </div>
            </div>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                <div class="sppb-addon-content">
                    <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/mulwala_aethi_viyali_kunuweemk.jpg" alt="">
                </div>
            </div>
            <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;">
            </div>
        </div>
    </div>
</div>
    
    </section>
    <!-- /.content -->
  </div>
</body>
<html>