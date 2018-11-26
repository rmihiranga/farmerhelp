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
        <article class="art-post"><div class="art-postcontent clearfix"><div id="sp-page-builder" class="sp-page-builder  page-142">
		
        <div class="page-content">
            <section  class="sppb-section " style=""><div class="sppb-row"><div class="sppb-col-sm-3"><div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms"></div></div><div class="sppb-col-sm-6"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="color:#000000;">වෛරස්</h2><div class="sppb-addon-content"></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h3 class="sppb-addon-title" style="">කඩමළුවන් කුරුවීම</h3><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මෙම වෛරස් රෝගයේ ද වාහකයා වන්නේ දුඹුරු පැළ කීඩෑවාය. ඩිම්බ තුලින් ගෙන යනු නොලබන මේවා වෛරසයත් වාහකයාත් අතර අන්තර් ක්‍රියාව අඛණ්ඩ එකකි. ආසියාවේ නොයෙක් රටවල පැතිර ඇති මෙම වෛරස් රෝගය මඟින් විශාල අස්වනු හානි සිදුවී ඇත.</span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
    <div style="text-align: justify;"><span style="font-size: 14pt;"><strong><br />රෝග ලක්ෂණ</strong></span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;">ආසාදිත ශාක කුරු වේ. ආසාදනයට ගොදුරු වන ශාකයේ වර්ධක අවස්ථාව අනුව අනෙකුත් රෝග ලක්ෂණ වෙනස් වේ. පැළ අවස්ථාවේ දි රෝග පාත්‍රී වූ ශාකවල දක්නට ලැබෙන පැහැදිලි ලක්ෂණය වන්නේ කඩමළු වූ පත්‍රයි. පත්‍ර දිග ඇරීමටත් පෙර ඒවායේ දාර අක්‍රමවත් හෝ කඩතොලු වූ ස්වභාවයක් හෝ ගන්නා අතර දිග හැරීමත් සමඟ කඩතොලු වූ ස්ථාන හරිතක්ෂය වී දුඹුරුවන් කහ පැහැයකට හැරේ.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">කෙටි දඟර වැටුනු විකෘති වූ ධජපත්‍ර</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/wai1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong> </strong></span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;"><span style="font-size: 12pt;">ආසාදිත ශාක කුරු වේ. ආසාදනයට ගොදුරු වන ශාකයේ වර්ධක අවස්ථාව අනුව අනෙකුත් රෝග ලක්ෂණ වෙනස් වේ. පැළ අවස්ථාවේ දි රෝග පාත්‍රී වූ ශාකවල දක්නට ලැබෙන පැහැදිලි ලක්ෂණය වන්නේ කඩමළු වූ පත්‍රයි. පත්‍ර දිග ඇරීමටත් පෙර ඒවායේ දාර අක්‍රමවත් හෝ කඩතොලු වූ ස්වභාවයක් හෝ ගන්නා අතර දිගහැරීමත් සමඟ කඩතොලු වූ ස්ථාන හරිතක්ෂය වී දුඹුරුවන් කහ පැහැයකට හැරේ.<br /></span></span>
    <p><span style="font-size: 12pt;">ශාකය වර්ධනය වීමත් සමඟ කඩමළු පත්‍ර හටගැනීම ක්‍රමයෙන් අඩු වේ. මෙවැනි අවස්ථාවල වැඩිපුර දක්නට ලැබෙන්නේ ඇඹරී ගිය පත්‍රයි. මීට අමතරව පත්‍ර තලය සහ කොපුවේ නාරටි ඉදිමීම ද දැකගත හැක. මෙයට හේතු වන්නේ සනාල කලාපවල ඇති ප්ලෝයම පටකවල සිදුවන අධික වර්ධනයයි.</span><span style="font-size: 12pt;">නාරටි ඉදිමීම සුදු හෝ ලා කහ පාටක් ගන්නා අතර දිගින් මි.මී. 1-10ක්ද පළලින් මි.මී. 0.1-1ක්ද පමණ වන අතර මි.මී. 0.1-10ක පමණ ඝනකමක් ද ගනී. ශාකය ප්‍රජනන අවස්ථාවට එළඹීමතා සමග කැපී පෙනෙන ලක්ෂණය වන්නේ කෙටි දඟර වැටුනු හා විකෘති වූ ධජපත්‍ර ඇතිවීමයි</span></p>
    </div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/wai2.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h3 class="sppb-addon-title" style="">තෘණකාර කුරුවිම</h3><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මෙම වෛරස් රෝගය දුඹුරු පැළ කීඩෑවන් මඟින් ආසාදනය වේ. වෛරස් වාහක අන්තර් ක්‍රියාව අඛණ්ඩ වන අතර ඩිම්බ හරහා නොයයි.<br /><br /></span></div>
    <div style="text-align: justify;"><span style="font-size: 14pt;"><strong>රෝග ලක්ෂණ</strong></span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;">ආසාදනය වූ පැළ තදින් කුරුවන අතර, තෘණ පඳුරක පෙනුම ගනිමින් අධික ලෙස රිකිලි දමයි. පත්‍ර පටුවූත්, කෙටි වුත් ස්වභාවයක් ගනී. මේවා ලා කොළ පැහැයේ සිට තද කොළ පැහැයක් ගන්නා අතර පත්‍ර තලයේ කළු පැහැති පුල්ලි දැකිය හැක.</span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;">ආසාදිත ශාක පරිණත අවස්ථාව දක්වා වැඩෙන අතර කරල් හටගැනීම සිදුවන්නේ ඉතා කලාතුරකිනි. හට ගන්නා කරල් ඉතා කුඩාවන අතර දුඹුරු පැහැති බොල් වූ බීජ දරයි.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">තෘණ පඳුරක පෙනුම ගනිමින් අධික ලෙස රිකිලි දැමූ ශාක</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/tru1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p><span style="font-size: 12pt;">ප්‍රතිරෝධී ප්‍රභේද වගාව</span></p>
    <ul>
    <li><span style="font-size: 12pt;"> වාහකයා වන දුඹුරු පැළ කීඩැවා මර්ධනය</span></li>
    <li><span style="font-size: 12pt;"> වාහකයා වන දුඹුරු පැළ කීඩැවාට ප්‍රතිරෝධි ප්‍රභේද වගා කිරිම</span></li>
    <li> <span style="font-size: 12pt;"> මෙම වෛරසය පැතිර ගිය ස්ථානවල පැළ සිට දුඹුරු පැළ කීඩෑවන් මර්ධනය කිරීම මඟින් </span><span style="font-size: 12pt;">තව දුරටත් පැතිර යාම වළක්වා ගත හැ</span><strong>ක</strong></li>
    </ul></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">පත්‍ර පටුවූත්, කෙටිවූත් ශාක</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/tru2.JPG" alt=""></div></div></div></div><div class="sppb-col-sm-3"><div class="sppb-addon-container" style=""></div></div></div></section>	</div>
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
