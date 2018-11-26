<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Farmer Help</title>
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
     
     <section>

          <!-- Main content -->
          <article class="art-post"><div class="art-postcontent clearfix"><div id="sp-page-builder" class="sp-page-builder  page-141">
		
	<div class="page-content">
		<section  class="sppb-section " style=""><div class="sppb-row"><div class="sppb-col-sm-3"><div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms"></div></div><div class="sppb-col-sm-6"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h3 class="sppb-addon-title" style="">බැක්ටීරියා කොළ අංගමාරය</h3><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">වී වගාවට හානි කරන බැක්ටීරියා රෝග අතුරින් වඩාත් පැතිර ඇත්තේ බැක්ටීරියා කොළ අංගමාරයයි. ළපටි ගොයමට මෙම බැක්ටීරියා ආසාදනය වු විට දක්වන රෝග ලක්ෂණ "ක්‍රෙසෙක්" යනුවෙන් හඳුන්වන අතර, පරිණත වූ ගොයමට ආසාදනයවීමෙන් කොළ අංගමාරය සෑදේ.</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"><span style="font-size: 14pt;"><strong>රෝග ලක්ෂණ</strong></span><br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">තවාන් ගලවා නැවත සිටුවීමේ දි කැඩුණු මුල් හෝ පත්‍ර හෝ ජල ජිද්‍ර තුලින් ඇතුල් වන මෙම බැක්ටීරියාව සනාල පද්ධතිය ආක්‍රමණයකර ගුණනය වේ. මෙහි ප්‍රතිඵලය වන්නේ ශාකයේ පරිවහනය ඇහිරී, පත්‍ර කහ පැහැයට හැරී පසුව මුළු ශාකයම වියළී යාමයි.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">රෝගී වූ වගාවක්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/bac1.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong> </strong></span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong>රෝග ලක්ෂණ<br /><br /></strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">කෙසෙක් රෝගය සාමාන්‍යයෙන් ගොයම් පැළවල වර්ධනයේ මුල් සති 2-6 ඇතුලත ඇති වන අතර එය බොහෝ විට පුරුක් පණු හානිය ලෙස වරදවා වටහා ගනී. රෝග පාත්‍රි ශාකයක පහළ කඳ කොටස කපා ඉවත් කර පරීක්ෂා කිරීමේදි ඇතිවන රෝගයට ආවේණික විශිෂ්ඨ දුර්ගන්ධයත්, උකු බැක්ටීරියා ශ්‍රාවයත් නිසා ක්‍රෙසෙක් රෝගය වෙන්කර හඳුනා ගත හැක.මෙම බැක්ටීරියාව පත්‍රයකට ආසාදනය වූ මුල් අවස්ථාවේ පත්‍ර දාර මත ඇතිවන ලප කහ පැහැයේ සිට සුදු පැහැයට හුරු තෙත බරිත තීරු වැනි ස්වභාවයක් ගනී</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">කහ පැහැයකට හැරුණු </h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/bac2.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;"><span style="font-size: 12pt;">මෙම ලප පත්‍ර දාරයක හෝ පත්‍ර දාර දෙකේම ආරම්භ විය හැකි අතර, පසුව කහ හෝ ලා දුඹුරු පැහැයක් ගෙන මුළු පත්‍ර තලය පුරාම තරංග ආකාර දාරයක් සේ පැතිර යයි. ඔරොත්තු නොදෙන වී ප්‍රභේදවල පත්‍ර කොපු කරා ද මෙම රෝග ලක්ෂණ පැතිරේ.<br /></span></span>
<p><span style="font-size: 14pt;"><strong>ව්‍යාප්තිය</strong></span></p>
<span style="font-size: 12pt;">අළුතින් සිටුවන වී වගාවකට මෙම බැක්ටීරියාව ආසාදනය විය හැකි මාර්ග නම් රෝගයට ගොදුරු වූ පිදුරු, ඉපනැලි, බීජ හා රෝග ධාරක වල් පැළෑටීන්‍ය. ආසාදිත පත්‍රමත උදය කාලයේදි ඉතා කුඩා කැටිති වශයෙන් එක්තැන් වන මෙම බැක්ටීරියා සෛල පසුව ඝනවී පත්‍ර තලයේ ඇලී පවති.<br /></span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">දාර දෙකේම ලප ඇති වූ පත්‍රයක්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/bac3.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මේවා දියවී පහසුවෙන් ව්‍යාප්ත වී යයි.</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">මිට අමතරව, </span></div>
<div style="text-align: justify;">
<ul>
<li><span style="font-size: 12pt;">තුෂාර</span></li>
<li><span style="font-size: 12pt;">වාරි ජලය</span></li>
<li><span style="font-size: 12pt;">ගං වතුර</span></li>
<li><span style="font-size: 12pt;">තද සුලඟ</span></li>
</ul>
</div>
<div style="text-align: justify;"><span style="font-size: 12pt;">ආදිය ද මෙම බැක්ටීරියාව පැතිර යාමට ආධාර වන සාධක වේ.</span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong><br />පාලනය</strong></span></div>
<ul>
<li><span style="font-size: 12pt;"> ප්‍රතිරෝධී ප්‍රභේද භාවිතය</span></li>
<li><span style="font-size: 12pt;"> රෝගයට පාත්‍ර වූ ඉපනැල්ල හා පිදුරු පුළුස්සා දැමීම</span></li>
<li><span style="font-size: 12pt;"> සමතුලිත පොහොර භාවිතය</span></li>
<li><span style="font-size: 12pt;"> වගාවේ වල් පැළෑටි පාලනය</span></li>
</ul></div></div></div></div><div class="sppb-col-sm-3"><div class="sppb-addon-container" style=""></div></div></div></section>	</div>
</div></div></article>

    

     </section>
     <!-- right col -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>

</div>  
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
