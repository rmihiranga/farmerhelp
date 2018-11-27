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
                    
                    <p><strong><span style="font-size: 14pt;">යටිපුස් රෝගය</span> </strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt;">රෝග කාරකය පෙරනොස්පෝරා සහ සියුඩො පෙරනොස්පෝරා විශේෂයට අයත් දිලීරයන්ය. මෙයද තවානේදී භෝගවලට වැළඳෙන ඉතාමත් හානිකර රෝගී තත්ත්වයකි. තවානේදී මෙන්ම ක්ෂේත‍්‍රයේදී ද භෝගයට හානි කරයි. අධික ආර්ද්‍රතාවයක් හා සාමාන්‍ය උෂ්ණත්වයේ දී රෝගය වැළඳීමේ අවදානම වැඩියි.</span></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt;"><br /><br /></span></p>
                </div>
            </div>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                <div class="sppb-addon-content">
                    <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/yati_pus_rogaya.jpg" alt="">
                </div>
            </div>
            <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
            <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                <div class="sppb-addon-content">
                    <p><strong><span style="font-size: 14pt;">රෝග ලක්‍ෂණ</span></strong> </p>
                <div style="text-align: justify;">
                    <span style="font-size: 12pt;">ශාකයේ  ඕනෑම අවස්ථාවකදී රෝගයට පාත‍්‍ර වීමේ අවදානම සහිතය. පත‍්‍රයේ යටි පෘෂ්ඨය ආසාදනයට ලක්වන අතර උඩු පෘෂ්ඨය කහ පැහැ වේ.කුඩා පත‍්‍ර හෝ බීජ පත‍්‍ර ආසාදනය වීමෙන් කහ පැහැ වී පසුව එම පත‍්‍ර මැරී හැලී යයි. රෝගය සඳහා පාරිසරික තත්ත්වයන් හිතකර අවස්ථාවේදී සම්පූර්ණ ශාකයම විනාශ වී යයි.</span>
                </div>
                <div style="text-align: justify;">
                    <span style="font-size: 12pt;"> </span>
                </div>
            </div>
        </div>
        <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
            <div class="sppb-addon-content">
                <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/pela_ghnya_adika_nou_awsthwk.jpg" alt="">
            </div>
        </div>
        <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
            <div class="sppb-addon-content">
                <p><strong><span style="font-size: 14pt;">රෝග පාලනය </span></strong></p>
                <p style="text-align: justify;"><span style="font-size: 12pt;">ක්ෂේත&zwj;්&zwj;රය පිරිසිදුව තබා ගැනීම, උණු වතුර මඟින් බීජ ප&zwj;්&zwj;රතිකාර කිරීම (උෂ්ණත්වය සෙ.අංශක 50 ක් ජලයෙහි විනාඩි 15-25 ක් බීජ ගිල්වා තැබීමෙන් තවාන් පාත්ති ජීවානුහරණය, පිරිසිදු තවානක් පවත්වා ගැනීම, වල් පැළෑටි පාලනය, භෝග&nbsp;&nbsp; මාරුව සහ පැළ ගහණය අධික නොවීමට වග බලා ගත යුතුය. මීට අමතරව කැප්ටාන්, මැන්කොසෙබ්, මැනෙබ්, ප්&zwj;රොපිනෙබ් සහ ක්ලෝරොතැලොනිල් වැනි දිලීර නාශකයක් නිර්දේශිත ප&zwj;්&zwj;රමාණයෙන් යෙදිය යුතුය.</span></p>
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