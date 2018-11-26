<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Farmer Help</title>
  <link href="https://www.doa.gov.lk/index.php/si/component/sppagebuilder/page/184-club-root-udarata-elavalu-si" rel="canonical" />
  <link rel="stylesheet" href="/components/com_sppagebuilder/assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/components/com_sppagebuilder/assets/css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/components/com_sppagebuilder/assets/css/sppagebuilder.css" type="text/css" />
  <link rel="stylesheet" href="/media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="https://www.doa.gov.lk/plugins/system/popup_anywhere/css/noborder.css" type="text/css" />
  <link rel="stylesheet" href="/media/mod_social_slider/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/media/mod_languages/css/template.css" type="text/css" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url();?>"="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>"="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Farmer</b>Help</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url();?>"="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
        
          

        <a href="<?php echo base_url();?>index.php/Auth/login"="#" class="btn btn-default btn-flat">Login</a>
        <a href="<?php echo base_url();?>index.php/Auth/register"="#" class="btn btn-default btn-flat">Register</a>
              
            
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="<?php echo base_url();?>"="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo base_url();?>"="#">
            <i class="fa fa-dashboard"></i> <span>Pesticides</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>"="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="<?php echo base_url();?>"="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url();?>"="#">
            <i class="fa fa-dashboard"></i> <span>Pest Control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>"="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="<?php echo base_url();?>"="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        
        <li><a href="<?php echo base_url();?>index.php/Message/chatboxx"><i class="fa fa-book"></i> <span>ChatBox</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="<?php echo base_url();?>"="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="<?php echo base_url();?>"="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="<?php echo base_url();?>"="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>

  
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
