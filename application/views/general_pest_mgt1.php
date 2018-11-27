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
    <h2 class="sppb-addon-title" style="">දියමලංකෑම</h2>
        <div class="sppb-addon-content">
        <p style="text-align: justify;"><br /><span style="font-size: 12pt;">කෘසිපරේසියේ කුලයේ භෝග බීට්, ලීක්ස් සහ සලාද වැනි එළවළු වලට වැළඳේ. දිලීර කාණ්ඩයට අයත් ෆියුසේරියම්, මැක්‍රො ෆොමිනා, පිතියම්, රයිසොක්ටෝනියා, ස්ක්ලෙරෝටියම් සහ පයිටොප්තොරා වැනි රෝග කාරක ජීවීන් මෙම රෝගය ඇති වීම කෙරෙහි බලපායි. අඩු හිරුඑළිය, අධික පැළ ගහණයකින් යුක්ත වීම, ඉහළ තෙතමනයක් සහිත වීම සහ නයිට‍්‍රජන් ප‍්‍රතිශතය අධික වීම  යන කරුණු මෙම රෝග කාරකයන් ක‍්‍රියාත්මක වීමට හේතු වේ.‍</span></p>
      </div>
      <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
      <div class="sppb-addon-content">
      <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/diyamalnkema.jpg" alt="">
      </div>
      </div>
      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
      <div class="sppb-addon-content"><br>
      <p><span style="font-size: 14pt;"><strong>රෝග ලක්‍ෂණ</strong></span></p>
      <p><strong><span style="font-size: 12pt;">බීජ කුණු වීම නිසා ප‍්‍රරෝහණය නොවීම, බීජ</span></strong></p>
      <p style="text-align: justify;"><span style="font-size: 12pt;">පැළවල වර්ධනය අඩාල වීම, මූල පද්ධතිය කුණු වීම, පස මට්ටම කඳ කුණුවී පැළ කඩා වැටීම සහ එම හේතුවෙන් බීජ පැළය කුණුවී හෝ වියළීම සහ අවසානයේදී පැළය මැරී යාම දක්නට ලැබේ. පැළය ගලවා බැලූවිට කළු පැහැතිවී කුණු වූ දුර්වල හෝ මැරී ගිය මූල පද්ධතියක් දක්නට ලැබේ.  එසේම කඳෙහි ද කළු පැහැති කුණුවීම දක්නට හැකිය. තවානේදීම ප‍්‍රතිකාර නොකලහොත් ක්‍ෂේත‍්‍රයට පැතිරී යා හැකි අතර, මෙය වගා ක්ෂේත‍්‍රයේදී ද්විතීයික ආසාදන ඇති වීම කෙරෙහිද බලපායි.</span></p>
      </div>
      </div>     
      <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
      <div class="sppb-addon-content">
      <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/beeja_pela_kunuweema.jpg" alt="">
      </div>
      </div>    
      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
      <div class="sppb-addon-content"><br>
      <p><strong><span style="font-size: 14pt;">රෝග පාලනය</span></strong></p>
      <p style="text-align: justify;"><span style="font-size: 12pt;">තවාන් පස හොඳින් ජීවානුහරණය කල යුතු අතර, හොඳින් හිරු එළිය වැටෙන ස්ථානයක් විය යුතුය. පසෙහි තෙතමනය අඩු තත්ත්වයක පවත්වා ගැනීමත්, බීජ දැමීමේදී පැළ ගහණය අධික නොවීමට වගබලා ගැනීමත්, බීජ තවානෙහි සිටුවීමට පෙර රසායනික ද්‍රව්‍ය (දිලීර නාශක) භාවිතා කර හෝ හුමාලය මඟින් ප‍්‍රතිකාර කර තිබීම වැදගත්ය.  රෝග ලක්‍ෂණ දුටු වහාම තිරාම්, කැප්ටාන්, හෝමායි වැනි දිලීර නාශකයක් නිර්දේශිත ප‍්‍රමාණ වලින් පසට යෙදිය යුතුය.</span></p>
      </div>
      </div>  
      <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
      <div class="sppb-addon-content">  
      <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/pela_gahanaya_adika_nou_awasthawk.jpg" alt="">
      </div>
      </div>
      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
      <div class="sppb-addon-content"><br>
      <p><strong><span style="font-size: 14pt;">බීජ කුණු වීම</span></strong></p>
      <p style="text-align: justify;"><span style="font-size: 12pt;">දිලීර කාණ්ඩයට අයත් ෆියුසේරියම්, මැක්‍රොෆොමිනා, පිතියම්, රයිසොක්ටෝනියා, ස්ක්ලෙරෝටියම් සහ පයිටොප්තොරා ආසාදනයෙන් බීජ කුණු වීමකට ලක්වන අතර ප‍්‍රරෝහණයට අසමත් වේ. මෙම තත්ත්වය වළක්වා ගැනීම සඳහා තිරාම් හෝ කැප්ටාන් වැනි දිලීර නාශකයක් නිර්දේශිත ප‍්‍රමාණවලින් හෝ උණු වතුර මඟින් බීජ ප‍්‍රතිකාර කිරීමත්, මනා තවාන් පාලනයකුත් සිදු කළ යුතුය.</span></p>
      </div>
      </div>
      <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
      <div class="sppb-addon-content">
      <img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/treated_seeds.jpg" alt="">
      </div>
      </div>
      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
      <div class="sppb-addon-content"><br>
      <p style="text-align: justify;"><span style="font-size: 12pt;">මීට අමතරව තවානේදී පිටිපුස් රෝගය සහ යටි පුස් රෝගය වැළඳිය හැක. මේ පිළිබඳ වැඩි විස්තර සඳහා ක්ෂේත‍්‍රයේ දී වැළඳෙන රෝග යටතේ දක්වා ඇත.</span></p>
      </div>
      </div>

        </section>
        <!-- /.content -->
      </div>
      </body>
</html>