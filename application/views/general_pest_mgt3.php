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
            <div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms">
            </div>
        </div>
        <div class="sppb-col-sm-10 ">
            <div class="sppb-addon-container" style="padding:10px 10px 10px 10px;">
            <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                <div class="sppb-addon-content">
                    <p><strong><span style="font-size: 14pt;">ක්ෂේත‍්‍රයේ යේදී වැළඳෙන රෝග</span></strong></p>
                    
                    <p><strong><span style="font-size: 14pt;">වළයාකාර පුල්ලි රෝගය/ගෙඹි ඇස් රෝගය</span></strong></p>
                    <div style="text-align: justify;"><span style="font-size: 12pt;">කෘසිපරේසියේ කුලයේ භෝගවල ශාකයේ පත‍්‍රවලට මයිකොස්පිරෙල්ලා බ‍්‍රැසිකෝලා(<em>Mycosphaerella brassicola</em><em>)</em>නම් දිලීරය මඟින් ඇති කරන රෝගයකි. පත‍්‍රවල වළයාකාරව පුල්ලි ඇති කරයි. පිටතින් ඇති මේරූ පත‍්‍රවල හානිය වැඩිපුර දැකගත හැකිය. අභ්‍යන්තර පත‍්‍රවලට ඇති වන හානියට වඩා අධිකය.</span>
                    </div>
                    <div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
                    <p style="text-align: justify;"><span style="font-size: 12pt;"> </span></p>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/walayakara_pulli_rogaya.jpg" alt="">
                    </div>
                </div>
                <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <p><span style="font-size: 14pt;"><strong>රෝග ලක්&zwj;ෂණ</strong></span></p>
                        <p style="text-align: justify;"><span style="font-size: 12pt;">කොළ පැහැති පත&zwj;්&zwj;ර මත, නාරටිවල හෝ නාරටි අතර වළලූ ආකාරයේ පුල්ලි ඇති වේ. මෙම පුල්ලිවල ප&zwj;්&zwj;රමාණය එකිනෙකට වෙනස්වන අතර එහි දාරවල බීජාණු විශාල සංඛ්&zwj;යාවක්&nbsp; දක්නට ලැබේ.</span></p>
                        <p>&nbsp;</p>
                        <p><strong><span style="font-size: 14pt;">පාලන ක&zwj;්&zwj;රම</span></strong></p>
                        <p style="text-align: justify;"><span style="font-size: 12pt;">කෘසිපරේසියේ&nbsp; කුලයේ ශාක රෝග බොහොමයක් බීජ මඟින් ඇතිවන බැවින්&nbsp; සිටුවීමට පෙර සෙ. අංශක 50 ක් ජලයෙහි විනාඩි 15-25 ක් බීජ ගිල්වා තැබිය යුතුය.භෝග සනීපාරක්&zwj;ෂාව සහ භෝග මාරුව&nbsp;&nbsp; ඉතාමත් වැදගත් වන අතර නිර්දේශිත දිලීර නාශකයන් භාවිතා කළ හැක.</span></p>
                    </div>
                </div>
                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                    <div class="sppb-addon-content">
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/namyashili_kandak_athiweema.jpg" alt="">
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