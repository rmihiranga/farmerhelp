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
         <article class="art-post"><div class="art-postcontent clearfix"><div id="sp-page-builder" class="sp-page-builder  page-139">
		
	<div class="page-content">
		<section  class="sppb-section " style=""><div class="sppb-row"><div class="sppb-col-sm-3"><div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms"></div></div><div class="sppb-col-sm-6"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h3 class="sppb-addon-title" style="color:#000000;">දිලීර</h3><div class="sppb-addon-content"></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>කොපු අංගමාරය<br /></strong><br /><strong>රෝග ලක්ෂණ</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">සාමාන්‍යයෙන් මෙම රෝගයට ගොයම් කරල් පාත්‍රවන්නේ උපරිම පඳුරු දැමීමේ අවස්ථාවට පසුවය. මෙහි දර්ශීය රෝග ලක්ෂණවන්නේ පත්‍ර කොපුමත කොළ පැහැයට හුරු අලු පැහැති ඕවලාකාර හෝ ඉලිප්සාකාර ලප ඇතිවීමයි.මේවා ආසාදිත ප්‍රදේශයට විශේෂ රටාවක් ගෙන දෙන අතර කල්යාමත් සමඟ විශාල වී එකට එක්වීම නිසා පත්‍ර කොපුවම පිදුරු පැහැයකට හැරේ. හිතකර පරිසර තත්ත්ව වල මෙම ලප පත්‍ර තලය වෙතට ද පැතිර යයි. මෙවැනි අවස්ථාවල හටගන්නා කරල් බොල්වේ.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kopu1.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;"><span style="font-size: 14pt;"><strong>ව්‍යප්තිය<br /></strong></span><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">මෙම රෝගයට ගොදුරු වූ ගොයම් පැළ මත සෑදෙන දිලීර බීජාණු පසුව පසට එක්වේ. බිම් සකස් කිරීමේදී ජලය සමග මිශ්‍රවී ෙක්ෂ්ත්‍රයේ ව්යෙආප්තවී ආසාදනය පැතිරේ.</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">සුදුසු පරිසර තත්ත්වයන්</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<ul>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">අධික උෂ්ණත්වය</span></div>
</li>
<li>
<div style="text-align: justify;"><span style="font-size: 12pt;">අධික ආර්ද්‍රතාවය</span></div>
</li>
</ul>
<p> </p></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">රෝගයට ගොදුරු වූ ශාකයක්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kopu2.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>පාලනය</strong></span></div>
<div style="text-align: justify;"> </div>
<ul>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">මූලික බිම් සකස් කිරීම ගැඹුරට හා නිසිලෙස කිරීම.</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">අධික ලෙස නයිට්‍රජනීය පොහොර භාවිතයෙන් වැළකීම.</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">ප්‍රතිරෝධී හෝ රෝගයට ඔරොත්තු දෙන ප්‍රභේද වගා කිරීම.</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">නයිට්‍රජන් අඩංගු පොහොර නිර්දේශය කොටස් වශයෙන් යෙදිම.</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">ජල පාලනය.</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">වගාවේ වල් පැළෑටි පාලනය.</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">නියමිත පරතරයට නිසි බිත්තර වී ප්‍රමාණය වගාවේ පිහිටුවීම.</span></div>
</li>
<li>
<div style="text-align: justify;"><span style="font-size: 12pt;">රසායනික පාලනය (නිර්දේශිත දිලීරනාශක යෙදීම).</span></div>
</li>
</ul></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><strong><span style="font-size: 14pt;">කොළ පාලුව<br /></span><br /></strong><span style="font-size: 12pt;">වී වගාවට වැළඳෙන දිලිර රෝග අතුරින් වඩාත්ම පැතිර ඇති හා වඩාත්ම හානිදායක රෝගය </span><span style="font-size: 12pt;">"කොළ පාළුව" වේ. මෙය ගොයම් පැළයේ ඕනෑම වර්ධක අවස්ථාවක ආසාදනය විය හැක.<br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"><span style="font-size: 14pt;"><strong>රෝග ලක්ෂණ</strong></span><br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">මෙම දිලීරය පත්‍ර මත, කඳේ ගැට මත, කරල් වල හෝ වී ඇට මත ලප ඇති කරයි. මෙම දිලීරය නිසා පත්‍ර මත හටගන්නා ලප ඉතාමත් පැහැදිලිය, පහසුවෙන් හඳුනා ගත හැක, දෙපස මහත්ව අග්‍ර උල්වී තර්කුවක හැඩය ගන්නා මේවා පත්‍ර තලය මත විසිරී පවතී. විශාල වූ ලපයේ මැද කොටස සාමාන්‍යයෙන් අලු පැහැයක් ගනී.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kolaa1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p><span style="font-size: 12pt;">තවද වී ප්‍රභේදවල ප්‍රතිරෝධී ස්වභාවය අනුව පත්‍රවල සෑදෙන මෙම ලපවල ප්‍රමාණයද වෙනස්විය හැක. කොළ පාළුව දිලීරය කඳේ ගැටවලට ආසාදනය වූවිට එම ස්ථාන කළු පැහැයකට හැරී කඳ එතැනින් කඩා වැටේ. තවද පත්‍ර කොපුවේ උපාධානය කළු පැහැයක් ගෙන කුණුවී පහසුවෙන් බිඳේ.</span></p>
<span style="font-size: 12pt;">කරලේ ගෙල ස්ථානයට මෙම දිලීරය පැතිරුනු විට එය කළු පැහැයකට හැරී බිදි යයි. ගෙල කුණු වීම (Neck Rot) ලෙස හඳුන්වන මෙම ආසාදනය නිසා වැඩෙන ධාන්‍ය පෝෂණය වීම වළකින හෙයින් බොල් වී කරල් හට ගනී.</span></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">පත්‍ර මත විසිර පවතින ලප</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kolaaa2.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p><span style="font-size: 12pt;">සමහර අවස්ථාවල කරලේ සමහර ශාඛා පමණක් මෙම දිලීරයට ගොදුරු වේ. මෙවැනි අවස්ථාවල එම ශාකවලට සම්බන්ධ වූ ධාන්‍ය පමණක් සම්පූර්ණයෙන් හෝ අර්ධ වශයෙන් හෝ බොල් බවට පත් වේ.</span></p>
<p><span style="font-size: 14pt;"><strong>ව්‍යාප්තිය</strong></span></p>
<span style="font-size: 12pt;">මෙම දිලීරයෙන් හට ගන්නා බිජාණු වාතය තුලින් පැතිර යයි. සුදුසු පරිසර තත්ත්ව ඇතිවිට මේවා ශාක මත ප්‍රරෝහණයවී ලප ඇති කරයි.</span></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">තර්කුවක හැඩය ගන්නා ලප</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kolaaa3.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>සුදුසු පරිසර තත්ත්වයන්</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;">
<ul>
<li><span style="font-size: 12pt;">අධික ආර්ද්‍රතාවය.</span></li>
<li><span style="font-size: 12pt;">අඳුරු කාලගුණික තත්වයන්.</span></li>
<li><span style="font-size: 12pt;">අධික වර්ෂාව.</span></li>
<li><span style="font-size: 12pt;">තුෂාර තිබීම.</span></li>
</ul>
</div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong> </strong></span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong>පාලනය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;">
<ul>
<li><span style="font-size: 12pt;">නිර්දේශිත ප්‍රමාණයට පමණක් නයිට්‍රජනීය පොහොර යෙදීම.</span></li>
<li><span style="font-size: 12pt;">ප්‍රතිරෝධී හෝ රෝගයට ඔරොත්තු දෙන ප්‍රභේද වගා කිරීම.</span></li>
<li><span style="font-size: 12pt;">වගාවේ වල් පැළෑටි පාලනය.</span></li>
<li><span style="font-size: 12pt;">ජල පාලනය</span></li>
<li><span style="font-size: 12pt;">නියමිත පරතරයට නිසි බිත්තර වී ප්‍රමාණය වගාවේ පිහිටුවීම.</span></li>
<li><span style="font-size: 12pt;">හැකි තරම් කන්නය මුලට වගාව පිහිටුවා ගැනීමෙන් වෙනත් කුඹුරුවලින් සිදුවිය</span><span style="font-size: 12pt;"> ආසාදනයන් වළක්වා ගත හැකිය.</span></li>
</ul>
</div>
<ul>
<li>
<div style="text-align: justify;"><span style="font-size: 12pt;">රසායනික පාලනය (නිර්දේශිත දිලීරනාශක යෙදීම).</span></div>
</li>
</ul></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h3 class="sppb-addon-title" style="">දුඔූරු පුල්ලි රෝගය</h3><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">ජලවහනය දුර්වල වූ හෝ පෝෂ්‍ය පදාර්ථ අඩු හෝ පසෙහි වැඩෙන වී වගාවන් මෙම රෝගයට පහසුවෙන් පාත්‍ර වේ. සාමාන්‍යයෙන් හොඳ වගා පාලනයක් යටතේ සරු පසෙහි සෑදෙන වගාවන්හි මෙම රෝගය දක්නට නොලැඹේ<br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong>රෝග ලක්ෂණ<br /><br /></strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">මෙම දිලීර ආසාදනයෙන් ප්‍රමාණයෙන් හා හැඩයෙන් තල ඇටයකට සමාන දුඹුරු පැහැති ලප පත්‍ර තලය මත හෝ තුෂ මත හටගනී. පත්‍ර තලය මත හටගන්නා ලප ආරම්භයේදි සෙ.මී. 0.05-0.1 ක පමණ විෂ්කම්භයක් ගන්නා අතර පසුව සෙ.මී. 0.4-1.0ක්, සෙ.මී. 0.1-0.2 ක් පමණ දක්වා විශාල වේ.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/duburu.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><strong><span style="font-size: 14pt;"> </span></strong></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">සාමාන්‍යයෙන් දුඹුරු පැහැයක් ගන්නා මෙම ලප මධ්‍ය අළු හෝ සුදු පැහැයක් ගනී. තවද බොහෝවිට ලප වටා ලා කහ පැහැති දාරයක්ද පිහිටයි. මෙම රෝගයට පාත්‍ර වූ කරල්වලින් හටගන්නා බීජවලද දිලීර බීජාණු පවතී.<br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"><span style="font-size: 14pt;"><strong>ව්‍යාප්තිය<br /></strong></span><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">මෙහි දිලීරයෙන් හටගන්නා බීජාණු වාතය තුලින් පැතිර යයි. සුදුසු පරිසර තත්ත්ව ඇති විට මේවා ශාක මත ප්‍රරෝහණයවී ලප ඇති කරයි.</span></div>
<span style="font-size: 12pt;">සුදුසු පරිසර තත්ත්වයන්</span><br /><span style="font-size: 12pt;"><br />  අධික ආර්ද්‍රතාවය</span><br /><span style="font-size: 12pt;">  අධික උෂ්ණත්වය</span><br /><br /></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">පත්‍ර  මත දුඹුරු ලප</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/duburu2.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;">පාලනය</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;">
<ul>
<li><span style="font-size: 12pt;">ඔරොත්තු දෙන වී ප්‍රභේද වගා කිරීම</span></li>
<li><span style="font-size: 12pt;">බීජ ප්‍රතිකාර කිරීම</span></li>
<li><span style="font-size: 12pt;">වගාවට ජල හිඟයක් ඇති නොවන පරිදි ජල පාලනය</span></li>
<li><span style="font-size: 12pt;">වගාව නිරෝගීව තබාගැනීම</span></li>
<li><span style="font-size: 12pt;">සමතුලිත පොහොර භාවිතය</span></li>
</ul>
<span style="font-size: 12pt;">වගාවේ වල් පැළෑටි පාලනය</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/duburu3.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div></div></div><div class="sppb-col-sm-3"><div class="sppb-addon-container" style=""></div></div></div></section>	</div>
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
