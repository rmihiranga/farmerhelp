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

<section  class="sppb-section " style="">
    <div class="sppb-row"><div class="sppb-col-sm-2">
        <div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms">
        </div>
        </div>
        <div class="sppb-col-sm-10">
            <div class="sppb-addon-container" style="">
            <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                <div class="sppb-addon-content">
                    <p><strong><span style="font-size: 14pt;">ක්ෂේත‍්‍රයේ යේදී වැළඳෙන රෝග</span></strong></p>
                    <p style="text-align: justify;"><strong><span style="font-size: 12pt;">කෘසිපරේසියේ කුලයේ භෝග වලට වැළඳෙන රෝග සහ රෝග පාලනය</span></strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt;">මෙම කුලයට අයත් භෝග අතරින් ගෝවා, මල් ගෝවා, චීන ගෝවා, නෝකෝල්, රාබු, බෘකොලි යන භෝග වල රෝග සහ රෝග පාලනය පිළිබඳව විමසා බලමු.<br /><br /></span></p>
                    <p><strong><span style="font-size: 14pt;">බරවා රෝගය :(club root)</span></strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt;">රෝග කාරකය ප්ලාස්මෝඩියෝපෝරා බ‍්‍රැසිකේ : (<em>Plasmodiophora brassicae</em>) නම් දිලීරයයි. <br /></span></p>
                </div>
            </div>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                <div class="sppb-addon-content">
                    <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/asadanaya_wee_ethi.jpg" alt="">
                </div>
            </div>
            <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
            <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                <div class="sppb-addon-content">
                    <p style="text-align: justify;"><span style="font-size: 12pt;">පසෙහි පී.එච්. අගය 5.7 ට වඩා අඩු වූ අවස්ථාවලදී මෙම රෝග කාරකය වර්ධනය සහ පැතිරීම වේගවත් වේ. නමුත් පී. එච් අගය 5.7  ට වඩා වැඩි කිරීමෙන් මෙම රෝග කාරකයාගේ වර්ධනය අඩු කර ගත හැකි අතර, පී.එච්. අගය 7ට වැඩිවිට සම්පූර්ණයෙන්ම පාලනය වේ. ආසාදිත පස සහ කාබනික පොහොර මඟින්ද වල් අබ, වල් රාබු වැනි වල් පැළෑටි දාරක ශාක වශයෙන් පැවතීමෙන්ද මෙම රෝගය පැතිරීමේ අවදානම සහිතය.</span></p>
                </div>
            </div>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                <div class="sppb-addon-content">
                    <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/mul_idimi_athi_awasthwak.jpg" alt="">
                </div>
            </div>
            <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
            <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                <div class="sppb-addon-content">
                    <p><strong><span style="font-size: 14pt;">රෝග ලක්‍ෂණ</span></strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt;">ශාකයෙහි පස අභ්‍යන්තරයෙහි ඇති කොටසට, විශේෂයෙන්ම මූල පද්ධතියට හානි කරන අතර වායව කොටසෙහි රෝග ලක්‍ෂණ දක්නට ලැබෙන්නේ රෝගය උත්සන්න වූ අවස්ථා වලදී පමණි. ශාකයෙහි වර්ධනය අඩාල වීම, තාවකාලික මැලවීම, උණුසුම් කාලගුණික තත්ත්ව වලදී නොමේරූ පැළ මැරී යාම දක්නට ලැබේ. ශාකය ගලවා බැලූ විට මුදුන් මුල හා පාර්ශ්වික මුල් ඉදිමී විකෘති වී තිබීම දක්නට ලැබේ. මෙම දිලීරය ආසාදනය වූ පැළ තව දුරටත් වර්ධනය නොවන අතර ගෙඩි සෑදීමක් ද සිදු නොවේ.</span></p>
                </div>
            </div>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                <div class="sppb-addon-content">
                    <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/rogya_uthsanna_vu_awasthawk.jpg" alt="">
                </div>
            </div>
            <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
            <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                <div class="sppb-addon-content">
                    <p><span style="font-size: 14pt;"><strong>පාලන ක‍්‍රම</strong></span></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt;">ක්ෂේත‍්‍රයේ පවිත‍්‍රතාවය ඉහළින් පවත්වා ගැනීම සහ නිරෝගී රෝපණ ද්‍රව්‍ය ක්ෂේත‍්‍රයේ සිටුවීමට යොදා ගැනීමෙන් රෝගය වැළඳීම සහ පැතිරීම පාලනය කළ හැක.  නිරෝගී තවානකින් ලබා ගත් පැළ භාවිතා කිරීම අත්‍යාවශ්‍ය වේ. රෝගී පැළ සහිත තවාන් වලින් පැළ ලබා ගැනීම නොකළ යුතුය.</span></p>
                </div>
            </div>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                <div class="sppb-addon-content">
                    <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/mela_u_f_gedi_nosadana_sakayk.jpg" alt="">
                </div>
            </div>
            <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
            <div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">වල් රාබු, වල් අබ වැනි වල් පැළෑටි ක්ෂේත‍්‍රයෙන් ඉවත් කළ යුතුය. ජීවානුහරණය කරන ලද පාංශු පී.එච්. අගය 5.7 ට වඩා ඉහළ අගයක පවත්වා ගත යුතුය.</span>
            </div>
            <div style="text-align: justify;">
            <span style="font-size: 12pt;">මෙම රෝගය සඳහා රසායනික ද්‍රව්‍ය නිර්දේශ කර නොමැත. ගෝවා අස්වැන්න නෙලීමෙන් පසු මෙම කුලයේ  ඕනෑම භෝගයක ඉතිරිවන කොටස් සම්පූර්ණයෙන්ම ඉවත්කර ක්ෂේත‍්‍රය ඉතා හොඳින් පවිත‍්‍රව පවත්වා ගත යුතුයි.</span>
            </div>
            </div>
            </div><br>
            <div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/mela_u_f_gedi_nosadana_sakayk.jpg" alt="">
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