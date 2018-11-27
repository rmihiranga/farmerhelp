
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
        <small>කෘමීන්​</small><br>
      
    </section>

    <!-- Main content -->
    
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
                        <p><strong><span style="font-size: 14pt;">දුඹුරු පෑළ කීඩෑවා</span></strong></p>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">ජීවන චක්‍රය</span></strong><br /><span style="font-size: 12pt;">ගොයමට පළමුව සංක්‍රමණය වන දිග පියාපත් සහිත සුහුඹුලන් පත්‍ර කොපු හෝ මැද නාරටි තුල බිත්තර කැදලි වශයෙන් තැන්පත් කරයි. මෙම බිත්තරවල පළල් පැතලි පියන් දක්නට ඇත.දින 7-9ක බීජෞෂණ සමයකින් පසුව ශිශුවන් බිහිවේ. ශිශු අවස්ථා 5ක් ඇති අතර ඒ සඳහා දින 13-15ක් පමණ කාලයක් වැය වෙයි. පළමු අවධියේ ශිශුවන් සුදු පැහැවන අතර පසු අවස්ථා දුඹුරු පැහැගනී. සුහුඹුලන් සාමාන්‍යයෙන් දින 14ක පමණ ජීවිත කාලයක් ගත කරන අතර කෙටි හෝ දිග පියාපත් දරයි. දිග පියාපත් සහිත ගැහැණු සතුන් බිත්තර 100ක් පමණ ද, කෙටි පියාපත් සහිත සතුන් බිත්තර 300ක් පමණ ද තැන්පත් කරති<br /><br /></span></p>
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/keedawa.jpg" alt="සුහුඹුල් කීඩෑවන්">
                        <p style="text-align: justify;"><span style="font-size: 12pt;"> </span></p><br>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">හානිය</span></strong><br /><span style="font-size: 12pt;">ජීවන චක්‍රයේ සියළුම අවස්ථාවන් පත්‍ර කොපුවේ ප්ලෝයම පටකවලින් අධිකව යුෂ උරාබීම නිසා ගොයම් ශාක පිළිස්සී ගියාක් මෙන් මිය යයි. මෙය කීඩෑ පිළිස්සීම ලෙස හඳුන්වයි.<br /><br /></span></p>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">පාලනය</span></strong><br /><span style="font-size: 12pt;">වගාව නොකඩවා සුපරික්ෂාවට භාජනය කිරීම<br>අවශ්‍ය අවස්ථාවල පමණක් කෘමිනාශක යෙදීම.<br> සමහර අවස්ථාවල වගාවේ ආරම්භක අවස්ථාවල නොනිසිලෙස කෘමිනාශක යෙදීම පරිණත අවධියේ දී කීඩෑවන් හිතකර සාධකයකි<br>ප්‍රතිරෝධී ප්‍රභේද වගාව බී. ඦී. 379-2 දුඹුරු පැහැකීඩෑවන්ට තරමක ප්‍රතිරෝධීත ඇති වී ප්‍රභේදයකි<br /><br /></span></p>
                    </div>
                </div>
                
            </div>
            <div class="sppb-addon-container" style="padding:10px 10px 10px 10px;">
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <p><strong><span style="font-size: 14pt;">පැළ මැක්කා</span></strong></p>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">ජීවන චක්‍රය</span></strong><br /><span style="font-size: 12pt;">සුහුඹුල් පැළ මැක්කන් මි.මී. 1-2ක් පමණ දිගැති, මෘදු දේහ සහිත කළු දුඹුරු පැහැති කෘමීන් වේ. මොවුන්ගේ ස්පර්ශක ඛණ්ඩ 5-8කින් යුක්ත වන අතර පටුවූ ද, දික්වූ ද, පියාපත් යුගල දෙකේ දාරවල සිහින් දිගැති කෙඳි පිහිටයි.ගැහැණු සතාට කියතක ආකාරයක් ගන්නා ඩිම්බ නිධායකයක් ඇති අතර, මෙමඟින් පත්‍ර තලය සිදුරු කර බිත්තර තනි තනිව පටක තුල තැන්පත් කරයි. ළපටි බිත්තර මි.මී. 0.25ක පමණ දිග හා මි.මී. 0.1ක් පමණ පළල වන අතර, පත්‍ර තලයෙන් පිටතට අවර්ණ නෙරීමක් වශයෙන් දිස් වේ. පත්‍ර ආලෝක ප්‍රභවයක් දෙසට යොමුකර පරික්ෂා කිරීමෙන් මේවා පහසුවෙන් බලා ගත හැක<br /><br /></span></p>
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/spalamakka.jpg" alt="සුහුඹුල් පැළ මැක්කා"><br></br>
                        
                        <p style="text-align: justify;"><span style="font-size: 12pt;">මේරීමත් සමඟ කහ පැහැයක් ගන්නා බිත්තරවලින් පිටවන ළපටි කීටයන් සුදු - කහ වර්ණයක් ගනී. පළමුව නිශ්චලව සිටින කීටයන් වැඩෙන පත්‍රවල හැකිලී ඇති දාර වෙතට සංක්‍රමණයවී ඒවායේ මෘදු පටකවල යුෂ උරා බීමෙන් යැපේ.මේ අන්දමට පත්‍ර මධ්‍යයේ ඇති පටක සෛලවල යුෂ උරා බීම නිසා ඒවා දුර්වර්ණයක් ගෙන දිග අතට හැකිලේ. මෙසේ හැකිළුනු පත්‍ර තුල කීට අවධි 3ක් හා අක්‍රීයව සිටින පිලා අවධි 2ක් ගතකර සුහුඹුලෙකු බවට පත්වේ. </span></p><br>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">හානිය</span></strong><br /><span style="font-size: 12pt;">ගොයම් පැළ අවධියේදී හානි කරන ඉතා කුඩා කෘමියෙකි. සුහුඹුලන් හා ශිශුවන් පත්‍ර යුෂ ආහාරයට ගැනීම නිසා පත්‍ර රිදිවන් සුදු පැහැයකට හැරී රෝල්වී වියළී යයි.ගොයම් පැළ මේරීම පැළ මැක්කන්ගේ ගහණ වර්ධනය කෙරෙහි අහිතකර බලපෑමක් වේ. මේ හෙයින් මොවුන් ළපටි පැළවෙත ක්‍රමයෙන් සංක්‍රමණය වීමේ හැසිරීම් රටාවක් පෙන්වයි. කන්නයක් පසුවී වගාකරන ගොයමේ පැළ මැක්කන් අධික ගහණ මට්ටම් දක්නට ලැබෙන්නේ මේ නිසාය. වියළි කාලවලදී හානිය උග්‍ර වේ. කෙටි කාලීන වී ප්‍රභේදවලට පැළ මැක්කන්ගෙන් සිදුවන හානිය අස්වැන්න කෙරෙහි වඩාත් බලපායි.<br /><br /></span></p>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">පාලනය</span></strong><br /><span style="font-size: 12pt;">නියමිත කන්නයට වගා කිරීම<br>නිසි වගා ක්‍රම අනුගමනය කිරීම<br>කන්නය පමාවී වපුරන විට බීජ ප්‍රතිකාර කිරීම<br>හානිය වැඩි අවස්ථාවල කෘමිනාශක යෙදීම<br>තවාන් දින 2ක් පමණ ජලයෙන් යටකර තැබීම<br /><br /></span></p>
                    </div>
                </div>
                
            </div>
            <div class="sppb-addon-container" style="padding:10px 10px 10px 10px;">
                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                    <div class="sppb-addon-content">
                        <p><strong><span style="font-size: 14pt;">හයිඩ්රීුලියා මැස්සා (කරටි පණුවා)</span></strong></p>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">ජීවන චක්‍රය</span></strong><br /><span style="font-size: 12pt;">සුහුඹුල් පැළ මැක්කන් මි.මී. 1-2ක් පමණ දිගැති, මෘදු දේහ සහිත කළු දුඹුරු පැහැති කෘමීන් වේ. මොවුන්ගේ ස්පර්ශක ඛණ්ඩ 5-8කින් යුක්ත වන අතර පටුවූ ද, දික්වූ ද, පියාපත් යුගල දෙකේ දාරවල සිහින් දිගැති කෙඳි පිහිටයි.ගැහැණු සතාට කියතක ආකාරයක් ගන්නා ඩිම්බ නිධායකයක් ඇති අතර, මෙමඟින් පත්‍ර තලය සිදුරු කර බිත්තර තනි තනිව පටක තුල තැන්පත් කරයි. ළපටි බිත්තර මි.මී. 0.25ක පමණ දිග හා මි.මී. 0.1ක් පමණ පළල වන අතර, පත්‍ර තලයෙන් පිටතට අවර්ණ නෙරීමක් වශයෙන් දිස් වේ. පත්‍ර ආලෝක ප්‍රභවයක් දෙසට යොමුකර පරික්ෂා කිරීමෙන් මේවා පහසුවෙන් බලා ගත හැක<br /><br /></span></p>
                                             
                        <p style="text-align: justify;"><span style="font-size: 12pt;">මි.මි. 2ක් පමණ වන සුහුඹුල් මැස්සා පත්‍ර තලය මත බිත්තර තනි තනිව තැන්පත් කරයි. බිත්තරවලින් පිටවන කීටයා (හයිඩ්‍රීලියා මැස්සා හෙවත් කරටි පණුවා) ශාකයේ කරටිය මැදට සංක්‍රමණයවි වර්ධනය වෙමින් පවතින පත්‍රවල ඇතුල් දාරයේ පටක සූරාකයි.වැඩෙන පත්‍රවල වර්ණයට සමාන කහ කොළ පැහැයක් ගන්නා මෙම කීටයා, පිලවා අවස්ථාවට එළඹෙන්නේ ද කඳ මතුපිටදිය. ජීවන චක්‍රය සඳහා සාමාන්‍යයෙන් සති 4ක කාලයක් ගනී </span></p><br>
                        <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kpanuwa.jpg" alt="සුහුඹුල් පැළ මැක්කා"><br></br>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">හානිය</span></strong><br /><span style="font-size: 12pt;">කරටි පණුවා වර්ධනය වන පත්‍රවල ඇතුල් දාරයේ පටක මත යැපේ. පත්‍ර වර්ධනයවී දිග හැරීමත් සමග මේ අන්දමට හානිවූ පටක සුදු කහ පැහැයකින් දිස් වේ.සාමාන්‍යයෙන් පැළ අවධියේ සිට උපරිම පඳුරු දමන අවස්ථාව පසුවන තෙක් වැඩෙන පත්‍රවල මෙම හානිය දැකිය හැකි වුවද, කෙටි කාලීන වී ප්‍රභේදවල විශේෂයෙන් පැළ අවධියේදි අධික හානි ඇති වූ අවස්ථාවල ධජ පත්‍රයද කරලේ කොටස් (ශුකිකා) ද, සුදු පැහැයක් ගෙන විනාශ විය හැක.කරටි පණුවාගේ හානිය වැඩිපුර දක්නට ලැබෙන්නේ ජලය බැඳ තැබූ කුඹුරුවලය<br /><br /></span></p>
                        <p style="text-align: justify;"><strong><span style="font-size: 12pt;">පාලනය</span></strong><br /><span style="font-size: 12pt;">වගාවේ පළමු දින 30 දී දින 3-4කට වරක් ජලය කපා හැරීම<br>ජල පෘෂ්ඨයේ ඇසෝල්ලා වැනි පාසි වර්ග වැවීම<br /><br /></span></p>
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
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
</body>
</html>