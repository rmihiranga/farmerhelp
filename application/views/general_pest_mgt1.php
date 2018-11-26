<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Farmer Help</title>
  <link href="https://www.doa.gov.lk/index.php/si/component/sppagebuilder/page/183-thawan-roga-udarata-ealawalu-si" rel="canonical" />
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
