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
