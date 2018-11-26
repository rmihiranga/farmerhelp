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
            <article class="art-post"><div class="art-postcontent clearfix"><div id="sp-page-builder" class="sp-page-builder  page-143">
		
	<div class="page-content">
		<section  class="sppb-section " style=""><div class="sppb-section-title sppb-text-center"><h2 class="sppb-title-heading" style="color:#000000;">වී වගාවේ පළිබෝධ </h2></div><div class="sppb-row"><div class="sppb-col-sm-3"><div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms"></div></div><div class="sppb-col-sm-6 "><div class="sppb-addon-container" style="padding:10px 10px 10px 10px;"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h3 class="sppb-addon-title" style="color:#000000;">කහ පුරුක් පණුවා</h3><div class="sppb-addon-content"><p><span style="font-size: 12pt;">පුරුක් පණුවන් විශේෂ කිහිපයක් ආසියාතික රටවල වී වගාවන්ට හානි පමුණුවයි. මොවුන් අතුරින් ශ්‍රී ලංකාවේ බහුල, ප්‍රධාන විශේෂය වන්නේ කහ පුරුක් පණුවාය.</span></p>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong>ජීවන චක්‍රය<br /><br /></strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">දිවා කාලයේ සෙවන ඇති ස්ථානවල රැදී සිටින පුරුක් පණු සලඹයන් ක්‍රීයාකාරීවන්නේ රාත්‍රී කාලයේය. සාමාන්‍යයෙන් දින 4ක පමණ ජිවිත කාලයක් ගත කරන ගැහැණු සලඹයින් බිත්තර 200-300ක් පමණ දමයි.එමෙන්ම මොවුන් ආලෝකය දෙසට ආකර්ශණය වන නිසා කේෂ්ත්‍රයේ අධික ගහන මට්ටම් ඇතිවිට පහන් අවට සලඹයින් විශාල සංඛ්‍යාවලින් දක්නට ලැබේ.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">පුරුක් පණු සලඹයා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/ka.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මෙවැනි අවස්ථාවල ගොයමේ ඇති පුරුක් පණු බිත්තර කැදලි ප්‍රමාණයද සලඹයින්ගේ සංඛ්‍යාවට අනුකූලව අධික වේ. ජීවන චක්‍රයක් සම්පූර්ණ වීම සඳහා සාමාන්‍යයෙන් සති 4-5ක් ගතවේ.<br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong>හානිය<br /><br /></strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">බොල්වූ ශුකිකා සහිත සුදු කරල්<br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">සුහුඹුල් සලඹයාගෙන් හානියක් නැතත් කීට අවස්ථාව ගොයම් ශාකයේ කඳට හානි කරයි. මොවුන් ගොයම් ශාකයේ වර්ධක හා ප්‍රජනක යන අවධි දෙකටම හානි කරයි. පුරුක් පණුවන් ගොයම් ගසේ කඳ තුල පෝෂණය වේ. මේනිසා සනාල පද්ධතිය විනාශ වී හානිවූ රිකිලි මැරී යයි</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">බොල්වූ ශුකිකා සහිත සුදු කරල්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/ka2.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>හානිය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">කරල් හට ගැනීමට පෙර එනම් වර්ධක අවධියේ සිදුවන පුරුක් පණු හානියේ ප්‍රථිඵලය වන්නේ රිකිලිවල වැඩෙන අංකුරය සහ අභ්‍යන්තර පත්‍ර වියළීයාමයි. මේවා "මළ හදවත්" (dead hearts) ලෙස හඳුන්වය<strong>.</strong>පීදෙන අවස්ථාවේදි පුරුක් පණුවාගෙන් සිදුවන හානිය බොල්වූ ශුකිකා සහිත "සුදු කරල" (white heads) වශයෙන් දැකගත හැකිය. මෙහිදී සම්පූර්ණ කරල් බොල්වී වියළී යයි. ගොයම් කරල් වර්ධනයවන අවස්ථාවේ පුරුක් පණු ආසාදනය නිසා කඳ සම්පූර්ණයෙන් විනාශ නොවුනහොත් හානිය පත්‍ර කොපුවලටත්, කඳේ පහළ කොටසේ සමහර ස්ථාන වලටත් සීමාවිය හැක.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">කඳ තුල සිටින පුරුක් පණුවා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/ka3.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div><span style="font-size: 12pt;">මෙවැනි අවස්ථාවලදි කරලේ පහළ කොටසේ ශුකිකා සමහරක් පමණක් බොල්වේ. පුරුක් පණුවාගේ හානිය සිදුවූ බවට හඳුනාගත හැකි <br /><br />ලක්ෂණ සමහරක් නම්, </span></div>
<div>
<ul>
<li><span style="font-size: 12pt;">කඳ තුල පුරුක් පණුවන් සිටීම.</span></li>
<li><span style="font-size: 12pt;">පුරුක් පණුවන් නිසා කඳ කපා දමා ඇති බවට පෙන්නුම් කරන සලකුණු තිබීම.</span></li>
<li><span style="font-size: 12pt;">කඳ තුල කීට අපද්‍රව්‍ය දක්නට ලැබීම.</span></li>
<li><span style="font-size: 12pt;">පත්‍රවල වර්ණ වෙනස්විම හා පුරුක් පණු සලඹයා පිටවු සිදුරු කඳෙහි සහ පත්‍ර </span><span style="font-size: 12pt;">කොපුවල දක්නට ලැබීම.</span></li>
</ul>
</div>
<div>
<ul>
<li><span style="font-size: 12pt;">වගාවක පුරුක් පණු බිත්තර කැදලි දක්නට ලැබීම.</span></li>
</ul>
</div>
<div><span style="font-size: 14pt;"><strong> <br />පාලනය</strong></span></div>
<ul>
<li><span style="font-size: 12pt;">කන්නයට වගා කිරීම</span></li>
<li><span style="font-size: 12pt;">බෝග මාරුව (මෙය යායම එකට කළ යුතුය).</span></li>
<li><span style="font-size: 12pt;">අස්වැන්න නෙලූ වගාව (ඉපනැල්ල) පසට යටකර දැමීම.</span></li>
<li><span style="font-size: 12pt;">හොඳින් බිම් සකස් කර වල් පැළෑටි මර්ධනය.</span></li>
<li><span style="font-size: 12pt;">අධික ලෙස නයිට්‍රජනීය පොහොර භාවිතයෙන් වැළකීම.</span></li>
<li><span style="font-size: 12pt;">කෙටි කාලීන නිර්දේශිත ප්‍රභේද භාවිතය.</span></li>
<li><span style="font-size: 12pt;">වසරකට කන්න 2 ක් පමණක් වගා කිරීම.</span></li>
<li><span style="font-size: 12pt;">නයිට්‍රජන් අඩංගු පොහොර නිර්දේශය කොටස් වශයෙන් යෙදිම.</span></li>
<li><span style="font-size: 12pt;">ගොඩ වි වගාවන් වෙනත් බෝග සමග මිශ්‍රව සිටුවිම.</span></li>
<li><span style="font-size: 12pt;">පැළ ගහනය සුදුසු පරිදි පවත්වාගෙන යාම.</span></li>
<li><span style="font-size: 12pt;">යාය එකට පීදෙන ලෙස වගා කිරීම.</span></li>
<li><span style="font-size: 12pt;">නිර්දේශිත රසායනික පාලනය</span></li>
</ul></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="color:#000000;">කොපු පණුවා</h2><div class="sppb-addon-content"><p><span style="font-size: 14pt;"><strong>ජීවන චක්‍රය</strong></span></p>
<p><span style="font-size: 12pt;">සුදු පැහැයක් ගන්නා සලඹයා දිගින් මි.මී. 6ක් පමණ වන අතර, විහිදුන පියාපත් හරහා මි.මී. 15ක් පමණ වේ. සුදු පැහැති පියාපත් මත කළු දුඹුරු පැහැයක් ගන්නා ලප තීරු කීපයක් ඇත. මොවුන් නිශාචරය. ආලෝකය දෙසට ආකර්ශණය වේ.</span></p>
<span style="font-size: 12pt;">දින 8ක පමණ ජීවිත කාලයක් ඇති ගැහැණු සලඹයා සාමාන්‍යයෙන් බිත්තර 50ක් පමණ තැන්පත් කරයි. ජල පෘෂ්ඨයට ආසන්නව පත්‍ර තලය හා කොපුව මත කාණ්ඩ වශයෙන් තැන්පත් කරන මෙම බිත්තරවලින් කීටයන් පිටවන්නේ දින 4ක පමණ බීජෞෂණ සමයකින් පසුවය. දින 20ක පමණ වර්ධක කාලයක් ගත කරන මොවුන් කීට අවධි 5ක් පමණ පසුකරයි. ජීවන චක්‍රය දින 35කින් පමණ සම්පූර්ණ වේ.</span></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">සුහුඹුල් සලඹයා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kada1.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මොවුන්ගේ ජලජ ස්වසනය සඳහා දේහයේ රෝම වැනි ජලක්ලෝම පිහිටයි. කොපු පණුවාට ගලා යන ජලය මඟින් වෙනත් කේෂ්ත්‍රය වෙත සංක්‍රමණයවී හානිය පැතිරිය හැක.</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"><br /><span style="font-size: 14pt;"><strong>හානිය</strong></span><br /><br /></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">බිත්තරයෙන් පිටවූ විගස ශරීරය වටා පත්‍රවලින් සාදාගත් කොපුව තුල සිට ලපටි පත්‍රවල උඩු අපිචර්මය ඉතිරිවන තෙක් යට පැත්තේ කොළ පැහැ කොටස් ආහාරයට ගනිමින් ජීවත් වේ. පසුව මේරූ පත්‍රද ආහාරයට ගනී. ශරීරය වටා ඔතා ගැනීමට පත්‍ර කොටස් කපා ගැනීම නිසා පත්‍ර තැනින් තැන කා දැමූ ස්වභාවයක් පෙන්නුම් කරයි. අධික ලෙස පත්‍රවලට හානි වුවහොත් අස්වැන්න අඩු විය හැක.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">හානි වූ ලපටි පත්‍ර</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kada2.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>පාලනය</strong></span></div>
<div style="text-align: justify;">
<ul>
<li><span style="font-size: 12pt;">වගාවේ පැළ අතර පරතරය වැඩි කිරීම</span></li>
<li><span style="font-size: 12pt;">නියමිත කන්නයට වගා කිරීම</span></li>
<li><span style="font-size: 12pt;">දින 5-7කට වරක් වගා කේෂ්ත්‍රයයේ ජලය කපා හැර</span><span style="font-size: 12pt;"> 2ක් පමණ වියළීමට හැරීම</span></li>
</ul>
</div>
<ul>
<li>
<div style="text-align: justify;">ර<span style="font-size: 12pt;">සායනික පාලනය</span></div>
</li>
</ul>
<div style="text-align: justify;"><span style="font-size: 12pt;"><strong> </strong></span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">හානි වූ මේරූ පත්‍ර</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kada3.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="">කොළ හකුලන දළඹුවා</h2><div class="sppb-addon-content"><p><span style="font-size: 14pt;"><strong>ජිවන චක්‍රය</strong></span></p>
<p><span style="font-size: 12pt;">සලඹයා පිටවී පළමු දිනයේම බිත්තර දැමීම ආරම්භ කරයි. සාමාන්‍යයෙන් එක් ගැහැණු සතෙකුට බිත්තර 300ක් පමණ නිපදවිය හැකි අතර, මේවා තනි තනිව හෝ කුඩා කාණ්ඩ වශයෙන් පත්‍ර තලය මත හෝ කොපුව මත තැන්පත් කරයි.</span><span style="font-size: 12pt;">දින 3-5ක පමණ බීජෞෂණ සමයකින් පසු බිත්තරවලින් පිටවන පළමු අවධියේ කීටයා (දළඹුවා) ලපටි පත්‍ර කොටස් සූරා ආහාරයට ගනී. වර්ධක කාලයකින් පසුව දෙවන කීට අවධියට පැමිණෙන දළඹුවා පත්‍ර හකුලා ඒ තුල පෝෂණය වේ. කීට අවධි කිහිපයක් ගත කරන මෙම දළඹුවා දේහය කහ පැහැයට හුරු කොළ පැහැතිය. හිස තද දුඹුරු පැහැයක් ගනී. දින 16ක පමණ වර්ධන කාලයකින් පසු එළඹෙන පිලවා අවධියද ගත කරන්නේ හකුලාගත් පත්‍ර තුලය.</span></p></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">කීටයා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kolk.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><strong><span style="font-size: 14pt;">හානිය</span></strong></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">මොවුන් පත්‍ර දාර එකට බැඳ නාලාකාර ව්‍යුහයක් සාදා එය තුල සිට පත්‍ර මධ්‍යයේ පටක සිරස් තීරු වශයෙන් සූරා කයි. මෙම හානිය පැතිරී ගිය අවස්ථාවල සුදු පැහැ ගැන්වූ හෝ දුර්වර්ණ වූ හැකිලුණු පත්‍ර නිසා ගොයමට නිසරුබවක් හා අවලස්සන බවක් ඇති වේ.හකුලාගත් පත්‍රයක් තුල පෝෂණය වන දළඹුවාට එම පත්‍රයේ මෘදු පටක ප්‍රමාණය අඩුවූ විට වෙනත් පත්‍රයක් වෙත සංක්‍රමණය වීම සිදුවේ. මේ නිසා ශාකයක පරිණත පත්‍රවල සිට අලුතින් හටගන්නා පත්‍ර කරා හානි ලක්ෂණ පැතිර යයි.</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">පත්‍ර දාර එකට බැඳ සාදාගත් නාලාකාර ව්‍යුහය</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/kolk1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>පාලනය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<ul>
<li style="text-align: justify;"><span style="font-size: 12pt;">කන්නය ආරම්භයේදීම වගාව පිහිටුවීම</span></li>
<li style="text-align: justify;"><span style="font-size: 12pt;">නයිට්‍රජන් අඩංගු පොහොර නිර්දේශිත පිළිවෙළටම යෙදීම</span></li>
<li style="text-align: justify;"><span style="font-size: 12pt;">මතුපිට පොහොර කොටස් වශයෙන් යෙදීම</span></li>
<li style="text-align: justify;"><span style="font-size: 12pt;">වගාව ආසන්නයේ එනම් නියර ආදි ප්‍රදේශවල ගොයම් නොවන වෙනත් කුඩා ශාක තිබෙන්නට හැරීම. මෙමගින් එම ප්‍රදේශයේ ජීවත්වන විලෝපික පළගැටියන්ට රාත්‍රී කාලයේදි කොළ හකුලන දළඹුවාගේ බිත්තර ආහාරයට ගෙන ඒවා විනාශ කළ හැක</span></li>
<li style="text-align: justify;"><span style="font-size: 12pt;">ක්ෂේත්‍රය අවට වදුල ඉවත් කිරිම</span></li>
<li style="text-align: justify;"><span style="font-size: 12pt;">රසායනික පාලනය</span></li>
</ul>
<br /><br /><br /></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="color:#000000;">ගොක් මැස්සා</h2><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>ජීවන චක්‍රය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">ගොක් මැස්සා ප්‍රමාණයෙන් මදුරුවකුට සමානවන අතර, ගැහැණු සතාගේ උදරය තද රතු පැහැයක් ගනී. මොවුන් දින 4ක පමණ ජීවිත කාලයක් ගත කරයි. රාත්‍රී කාලයේ කඩිසරවන ගැහැණු මැස්සන් කර වළල්ල ආසන්නව පත්‍ර තලයේ යට පැත්තේ හෝ පත්‍ර කොපුව මත බිත්තර 100-300ක් පමණ තැන්පත් කරයි.දින 3-4ක බිජෞෂණ සමයකින් පසු බිහිවන කීටයන් අධික ආර්ද්‍රතාවයක් ඇති විට පත්‍ර කොපු අතරින් වැඩෙන අංකුරයන් වෙත සංක්‍රමණය වේ. ප්‍රශස්ත තත්ත්ව යටතේ මේ සඳහා පැය 6 පමණ කාලයක් ගත වේ.</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">සුහුඹුල් ගොක් මැස්සා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/go1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මේ අන්දමට අංකුරයක් මත ගොක් මැස්සාගේ කීටයෙක් පෝෂණය වීමේ ප්‍රතිඵලයවන්නේ වැඩෙමින් පවතින පත්‍රයක් රිදී ගොබයක් බවට විකසනය වීමයි. සුහුඹුලකු බවට පත්වීමට ප්‍රථම දින 15-20ක් පමණ වන කීට අවස්ථා හා දින 6ක පමණ වන පිළවා අවධිය රිදී ගොබය තුල ගත කරයි. රිදී ගොබයක් පැහැදිලිව දක්නට ලැබෙන විට පිළවා අවස්ථාවට එළඹ සිටී.පසුව රිදී ගොබයේ ඉහළ අග්‍රය වෙත සංක්‍රමණය වන පිළවා එහි සිදුරකින් සුහුඹුලකු වශයෙන් පිටවේ. මේ අවස්ථාවේදී රිදී ගොබය අග්‍රයේ පිටතින් පිලවාගේ කෝෂාවරණය දැකගත හැක.</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">ගොක් මැස්සාගේ බිත්තර</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/go2.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p style="text-align: justify;"><span style="font-size: 12pt;">ගොක් මැස්සාගේ ගහණය අඩු වැඩි වීම දේශගුණික තත්ත්ව අනුව වෙනස් වේ. වියළි කාලවලදී වල් පැළෑටි මත හෝ වල් වී (wild rice) විශේෂ මත පූර්ව පිළවෙකු වශයෙන් අක්‍රීයව ගත කළ හැක. වැසි කාලය පටන් ගැනීමත් සමඟ සුහුඹුලන් බවට පත්වී වෙනත් ධාරක ශාක වෙත සංක්‍රමණය වේ.</span><span style="font-size: 12pt;">විකල්ප ධාරක මත ජීවන චක්‍රයක් සඳහා දින 9-14 පමණ ගත කරන අතර, ගොයම් ගසේ දින 9-26 තුලදී ජීවන චක්‍රය සම්පූර්ණ කරයි. මේ නිසා තවාන් අවධියේ ගොයමට සංක්‍රමණය වු ගොක් මැස්සන් කරල් හටගන්නා අවධිය වන විට පරම්පරා කීපයක් සම්පූර්ණ කරයි</span></p></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">සුහුඹුලා පිටව ගිය පසු ඉතිරි වූ කෝෂය</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/go3.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>හානිය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong> </strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">බිත්තර පිපිරී එලියට එන කීටයන් පත්‍ර තලය දිගේ ලිස්සා ගොස් වර්ධක අංකුරය දක්වා ගමන් කර අංකුරය මුල ආහාරයට ගනී. එවිට වර්ධක අංකුරය විකෘතිවී රිදී ගොබ ඇති කරයි. මෙම හානියට ලක්වූ රිකිලිවලින් කරල් හට නොගැනේ.ගොක් මැස්සාගේ ජීවන චක්‍රය සම්පූර්ණ වීම සඳහා අධික ආර්ද්‍රතාවයක් අත්‍යාවශ්‍ය හෙයින් මෙම හානිය වැඩිපුර ඇති වන්නේ වර්ෂා කාලයේත් මනා ජල සැපයුමක් ඇති කුඹුරුවලය. තෙත් හා වියළි කන්න වෙන් වෙන්ව ඇති ප්‍රදේශවල තෙත් කන්නයේ මුලින්ම පිහිටුවන වගාව මෙම හානියෙන් මඟහැරුනද පසුවී සාදන වගාවන් බලවත්සේ හානියට ගොදුරු වේ.</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">හානිය නිසා ඇති වූ රිදි ගොබ</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/go4.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>පාලනය</strong></span></div>
<ul>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">වගාවේ හා අවට තෘණ කුලයේ ශාක මර්ධනය</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">දින 5-7 වරක් ජලය කපා හැර වියළීමට හැරීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">නියමිත කන්නයට වගාව පිහිටුවීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">නිර්දේශිත ප්‍රමාණයට පමණක් නයිට්‍රජන් පොටෑසියම් අඩංගු පොහොර යෙදීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">යාය එකට වගා කිරීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">නිරි වගාවන් ඇති වීමට ඉඩ නොදී ඉපනැල්ල පසට යටකර දැමීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">ප්‍රතිරෝධී ප්‍රභේද වගා කිරීම. හානියට ඔරොත්තු දෙන නව වී ප්‍රභේද කීපයක් ඇත. ඒවා නම්,බී.ජී. 276-5, බී.ජී. 400-1, බී.ජී. 380, බී.ජී. 350, බී.ජී450, බී.ජී. 731-2 වේ</span></div>
</li>
<li>
<div style="text-align: justify;"><span style="font-size: 12pt;">රසායනික පාලනය. නමුත් කෘමිනාශක මඟින් මෙම හානිය මර්ධනය කිරීම ද අපහසුය</span></div>
</li>
</ul></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="color:#000000;">ගොයාම් මකුණා</h2><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>ජීවන චක්‍රය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">ගොයම් කරල් මත පෝෂණය වන මකුණන් අතුරින් එක් විශේෂයකි. සිහින් දිගැති සිරුරක් සහින සුහුඹුලන් පැහැයෙන් දුඹුරුය. දිගු පාද හා දිගු ස්පර්ශක දරයි. පත්‍ර මත හෝ කරල් මත පේලි වශයෙන් බිත්තර තැන්පත් කරයි.බිත්තර වලින් පිටවන ශිශුවන් කොළ පැහැයක් ගන්නා අතර ශිශු අවධි 5ක් පසු කිරීමෙන් පසු සුහුඹුලකු බවට පත්වේ. සුහුඹුලෙක් දින 90ක් පමණ ජීවත් වන අතර මේ කාලය තුල අවම වශයෙන් බිත්තර 100ක් තැන්පත් කරයි. ජීවන චක්‍රය සඳහා දින 30ක් පමණ ගනී</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">සුහුඹුල් ගොයම් මකුණා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/goyam1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>හානිය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">සුහුඹුලන් මෙන්ම ශිශුවන් වී ඇටයෙහි සරු තුෂය හා උප තුෂය අතරින් මුඛ උපාංග ඇතුල්කර වැඩෙමින් පවතින සහල් ඇටය මත පෝෂණය වේ.පරාගනයෙන් පසු ඩිමිබකෝෂය සහල් ඇටයක් බවට පත්වීම සඳහා වර්ධනය වන කාලය තුල ඕනෑම අවස්ථාවක ගොයම් මකුණාට හානි කළ හැක.කිරි වැදෙන අවස්ථාව තෙක් සිදුකරන හානිය අනුව නොයෙක් ප්‍රමාණවලින් බොල්වීම සිදුවිය හැක. සහල් ඇට ඝන වන අවස්ථාවේ සිදුවන හානිය නිසා තත්ත්වයෙන් බාල සහල් ලැබේ</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">කරලට හානි කරන ගොයම් මකුණන්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/goyam2.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>පාලනය</strong></span></div>
<ul>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">වනාත, ඇලවේලි සුද්ධ කිරීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">යාය එකට පීදෙන ලෙස වගා කිරීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">වගාවේ වල් පැළෑටි මර්ධනය</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">නියරවල වල් පැළෑටි මර්ධනය</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">වල් පැළෑටිවල මල් හටගන්නා විට ඒවා ඉවත් කිරීම</span></div>
</li>
<li style="text-align: justify;">
<div><span style="font-size: 12pt;">රසායනික පාලනය ගොවීන් අනුගමනය කරන වෙනත් ක්‍රම ලෙස ගොයම් මකුණන් අල්ලා කුඩා නූලක් ගැට ගසා මුදා හැරීම</span></div>
</li>
<li>
<div style="text-align: justify;"><span style="font-size: 12pt;">ගොයම් මකුණන් අල්ලා පත්‍ර කොපුවේ තැබීම. මෙහිදී අනතුරට පත සතාගෙන් නිකුත්වන පෙරමෝන නිසා අනෙක් ගොයම් මකුණන් ප්‍රදේශය අතහැර යයි</span></div>
</li>
</ul></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="color:#000000;">දුඹුරු පෑළ කීඩෑවා</h2><div class="sppb-addon-content"><p><span style="font-size: 14pt;"><strong>ජීවන චක්‍රය</strong></span></p>
<p><span style="font-size: 12pt;">ගොයමට පළමුව සංක්‍රමණය වන දිග පියාපත් සහිත සුහුඹුලන් පත්‍ර කොපු හෝ මැද නාරටි තුල බිත්තර කැදලි වශයෙන් තැන්පත් කරයි. මෙම බිත්තරවල පළල් පැතලි පියන් දක්නට ඇත.</span><span style="font-size: 12pt;">දින 7-9ක බීජෞෂණ සමයකින් පසුව ශිශුවන් බිහිවේ. ශිශු අවස්ථා 5ක් ඇති අතර ඒ සඳහා දින 13-15ක් පමණ කාලයක් වැය වෙයි. පළමු අවධියේ ශිශුවන් සුදු පැහැවන අතර පසු අවස්ථා දුඹුරු පැහැගනී. සුහුඹුලන් සාමාන්‍යයෙන් දින 14ක පමණ ජීවිත කාලයක් ගත කරන අතර කෙටි හෝ දිග පියාපත් දරයි. දිග පියාපත් සහිත ගැහැණු සතුන් බිත්තර 100ක් පමණ ද, කෙටි පියාපත් සහිත සතුන් බිත්තර 300ක් පමණ ද තැන්පත් කරති</span></p></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">සුහුඹුල් කීඩෑවන්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/du.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>ජීවන චක්‍රය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">පීදීමට ප්‍රථම ගොයම් පැළෑටියේ වැඩිපුර සිටින්නේ කෙටි පියාපත් සහිත සුහුඹුලන්‍ය. වගාව පරිණතවීමත් සමඟම සංක්‍රමණය වීමේ හැකියාව ඇති දිග පියාපත් සහිත කීඩෑවන් වැඩියෙන් බිහිවේ.</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 14pt;"><strong>හානිය</strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"> </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">ජීවන චක්‍රයේ සියළුම අවස්ථාවන් පත්‍ර කොපුවේ ප්ලෝයම පටකවලින් අධිකව යුෂ උරාබීම නිසා ගොයම් ශාක පිළිස්සී ගියාක් මෙන් මිය යයි. මෙය කීඩෑ පිළිස්සීම ලෙස හඳුන්වයි.</span></div></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p><span style="font-size: 14pt;"><strong>පාලනය</strong></span></p>
<ul>
<li><span style="font-size: 12pt;">වගාව නොකඩවා සුපරික්ෂාවට භාජනය කිරීම</span></li>
<li><span style="font-size: 12pt;">අවශ්‍ය අවස්ථාවල පමණක් කෘමිනාශක යෙදීම. සමහර අවස්ථාවල වගාවේ ආරම්භක අවස්ථාවල නොනිසිලෙස කෘමිනාශක යෙදීම පරිණත අවධියේ දී කීඩෑවන් හිතකර සාධකයකි</span></li>
<li><span style="font-size: 12pt;">ප්‍රතිරෝධී ප්‍රභේද වගාව බී. ඦී. 379-2 දුඹුරු පැහැකීඩෑවන්ට තරමක ප්‍රතිරෝධීත ඇති වී ප්‍රභේදයකි</span></li>
</ul></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">ලපට් ශිශුවන්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/du1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="color:#000000;">පැළ මැක්කා</h2><div class="sppb-addon-content"><p><strong><span style="font-size: 14pt;">ජීවන චක්‍රය</span></strong></p>
<p><span style="font-size: 12pt;">සුහුඹුල් පැළ මැක්කන් මි.මී. 1-2ක් පමණ දිගැති, මෘදු දේහ සහිත කළු දුඹුරු පැහැති කෘමීන් වේ. මොවුන්ගේ ස්පර්ශක ඛණ්ඩ 5-8කින් යුක්ත වන අතර පටුවූ ද, දික්වූ ද, පියාපත් යුගල දෙකේ දාරවල සිහින් දිගැති කෙඳි පිහිටයි.</span></p>
<span style="font-size: 12pt;"> ගැහැණු සතාට කියතක ආකාරයක් ගන්නා ඩිම්බ නිධායකයක් ඇති අතර, මෙමඟින් පත්‍ර තලය සිදුරු කර බිත්තර තනි තනිව පටක තුල තැන්පත් කරයි. ළපටි බිත්තර මි.මී. 0.25ක පමණ දිග හා මි.මී. 0.1ක් පමණ පළල වන අතර, පත්‍ර තලයෙන් පිටතට අවර්ණ නෙරීමක් වශයෙන් දිස් වේ. පත්‍ර ආලෝක ප්‍රභවයක් දෙසට යොමුකර පරික්ෂා කිරීමෙන් මේවා පහසුවෙන් බලා ගත හැක</span></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">සුහුඹුල් පැළ මැක්කා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/pel1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p style="text-align: justify;"><span style="font-size: 12pt;">මේරීමත් සමඟ කහ පැහැයක් ගන්නා බිත්තරවලින් පිටවන ළපටි කීටයන් සුදු - කහ වර්ණයක් ගනී. පළමුව නිශ්චලව සිටින කීටයන් වැඩෙන පත්‍රවල හැකිලී ඇති දාර වෙතට සංක්‍රමණයවී ඒවායේ මෘදු පටකවල යුෂ උරා බීමෙන් යැපේ.</span><span style="font-size: 12pt;">මේ අන්දමට පත්‍ර මධ්‍යයේ ඇති පටක සෛලවල යුෂ උරා බීම නිසා ඒවා දුර්වර්ණයක් ගෙන දිග අතට හැකිලේ. මෙසේ හැකිළුනු පත්‍ර තුල කීට අවධි 3ක් හා අක්‍රීයව සිටින පිලා අවධි 2ක් ගතකර සුහුඹුලෙකු බවට පත්වේ.</span></p></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">ළපටි කීටයා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/pel2.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">ගොයම් පැළ අවධියේදී හානි කරන ඉතා කුඩා කෘමියෙකි. සුහුඹුලන් හා ශිශුවන් පත්‍ර යුෂ ආහාරයට ගැනීම නිසා පත්‍ර රිදිවන් සුදු පැහැයකට හැරී රෝල්වී වියළී යයි.ගොයම් පැළ මේරීම පැළ මැක්කන්ගේ ගහණ වර්ධනය කෙරෙහි අහිතකර බලපෑමක් වේ. මේ හෙයින් මොවුන් ළපටි පැළවෙත ක්‍රමයෙන් සංක්‍රමණය වීමේ හැසිරීම් රටාවක් පෙන්වයි. කන්නයක් පසුවී වගාකරන ගොයමේ පැළ මැක්කන් අධික ගහණ මට්ටම් දක්නට ලැබෙන්නේ මේ නිසාය. වියළි කාලවලදී හානිය උග්‍ර වේ. කෙටි කාලීන වී ප්‍රභේදවලට පැළ මැක්කන්ගෙන් සිදුවන හානිය අස්වැන්න කෙරෙහි වඩාත් බලපායි.</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">රිදිවන් සුදු පැහැයට හැරුන පත්‍ර</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/pel31.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p><span style="font-size: 12pt;">දැනට වගාකරන වැඩි අස්වැන්න දෙන වී ප්‍රභේද සියල්ලම පාහේ පැළ මැක්කාගේ හානියට ග්‍රාහීවන ඒවා වුවත්, පැරණි කෙටි කාලීන වී ප්‍රභේද බොහොමයක ඔරොත්තු දීමේ ලක්ෂණ ඇතුළත් වේ.</span></p>
<p><span style="font-size: 12pt;">පාලනය</span></p>
<ul>
<li><span style="font-size: 12pt;">නියමිත කන්නයට වගා කිරීම</span></li>
<li><span style="font-size: 12pt;">නිසි වගා ක්‍රම අනුගමනය කිරීම</span></li>
<li><span style="font-size: 12pt;">කන්නය පමාවී වපුරන විට බීජ ප්‍රතිකාර කිරීම</span></li>
<li><span style="font-size: 12pt;">හානිය වැඩි අවස්ථාවල කෘමිනාශක යෙදීම</span></li>
<li><span style="font-size: 12pt;">තවාන් දින 2ක් පමණ ජලයෙන් යටකර තැබීම</span></li>
</ul></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title" style="color:#000000;">හයිඩ්රීුලියා මැස්සා</h2><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>ජීවන චක්‍රය<br /><br /></strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">මි.මි. 2ක් පමණ වන සුහුඹුල් මැස්සා පත්‍ර තලය මත බිත්තර තනි තනිව තැන්පත් කරයි. බිත්තරවලින් පිටවන කීටයා (හයිඩ්‍රීලියා මැස්සා හෙවත් කරටි පණුවා) ශාකයේ කරටිය මැදට සංක්‍රමණයවි වර්ධනය වෙමින් පවතින පත්‍රවල ඇතුල් දාරයේ පටක සූරාකයි.</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">වැඩෙන පත්‍රවල වර්ණයට සමාන කහ කොළ පැහැයක් ගන්නා මෙම කීටයා, පිලවා අවස්ථාවට එළඹෙන්නේ ද කඳ මතුපිටදිය. ජීවන චක්‍රය සඳහා සාමාන්‍යයෙන් සති 4ක කාලයක් ගනී</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">කරටි පණුවා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/hai1.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 14pt;"><strong>හානිය<br /><br /></strong></span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">කරටි පණුවා වර්ධනය වන පත්‍රවල ඇතුල් දාරයේ පටක මත යැපේ. පත්‍ර වර්ධනයවී දිග හැරීමත් සමග මේ අන්දමට හානිවූ පටක සුදු කහ පැහැයකින් දිස් වේ.සාමාන්‍යයෙන් පැළ අවධියේ සිට උපරිම පඳුරු දමන අවස්ථාව පසුවන තෙක් වැඩෙන පත්‍රවල මෙම හානිය දැකිය හැකි වුවද, කෙටි කාලීන වී ප්‍රභේදවල විශේෂයෙන් පැළ අවධියේදි අධික හානි ඇති වූ අවස්ථාවල ධජ පත්‍රයද කරලේ කොටස් (ශුකිකා) ද, සුදු පැහැයක් ගෙන විනාශ විය හැක.කරටි පණුවාගේ හානිය වැඩිපුර දක්නට ලැබෙන්නේ ජලය බැඳ තැබූ කුඹුරුවලය</span></div></div></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">කරටි පණුවාගේ හානිය</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/hai2.JPG" alt=""></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මෙයට ප්‍රධාන හේතුව වන්නේ සුහුඹුලන් බිත්තර දැමීම සඳහා මෙවැනි ස්ථාන තෝරා ගැනිමයි. හානි කළ ප්‍රමාණය අනුව රිකිලි දැමීම අඩුවී පරිණතවීමද පමාවිය හැක.</span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;"><br /><span style="font-size: 14pt;"><strong>පාලනය</strong></span></span></div>
<div style="text-align: justify;">
<ul>
<li><span style="font-size: 12pt;">වගාවේ පළමු දින 30 දී දින 3-4කට වරක් ජලය කපා හැරීම</span></li>
<li><span style="font-size: 12pt;">ජල පෘෂ්ඨයේ ඇසෝල්ලා වැනි පාසි වර්ග වැවීම</span></li>
</ul>
</div>
<div style="text-align: justify;"><span style="font-size: 12pt;">  </span></div>
<div style="text-align: justify;"><span style="font-size: 12pt;">වී වපුරන වගාවන්හි හානිය පැළ සිටුවන වගාවන්ට වඩා අඩුය පැළ ගහනය වැඩිනම් හානිය අඩුය</span></div></div></div></div></div><div class="sppb-col-sm-3"><div class="sppb-addon-container" style=""></div></div></div></section>	</div>
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
