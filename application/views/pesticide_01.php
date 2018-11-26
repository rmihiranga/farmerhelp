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
        <article class="art-post"><div class="art-postcontent clearfix"><div id="sp-page-builder" class="sp-page-builder  page-138">
		
        <div class="page-content">
            <section  class="sppb-section " style=""><div class="sppb-row"><div class="sppb-col-sm-3"><div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms"></div></div><div class="sppb-col-sm-6"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p><span style="font-size: 12pt;">1960 දශකයේ නිෂ්පාදනය වැඩි කිරීමේ අරමුණ පෙරදැරිකරගත් හරිත විප්ලවයේ ප්‍රථිඵලයක් ලෙස බිහි වූ වැඩි දියුණු කළ බෝග ප්‍රභේද, අස්වනු දෙගුණ කිරීමට සමත් විය. වැඩි අස්වනු ලබා ගැනීම සඳහා මේ සමඟ හඳුන්වාදුන් තාක්ෂණික තොරතුරු කට්ටලයට රසායනික පොහොර, පළිබෝධනාශක වැනි දෑ අත්‍යවශහ් අංග විය.විශාල වාරිමාර්ග පද්ධති බිහිවීමත් සමඟ වගා වපසරිය විශාල ලෙස වැඩි විය. <br /><br />එමෙන්ම මෙම වාරි පද්ධතිවල නව වැඩි දියුණු කළ වී ප්‍රභේද බහුල ලෙස වගා කෙරිනි. මෙම නව දියුණු ප්‍රභේද පළිබෝධ හානිවලට පාත්‍රීතාවය වැඩි නිසා එම වගාවන්හි පළිබෝධ ගැටළු ක්‍රමයෙන් උග්‍රවී විවිධ අවස්ථාවල පළිබෝධ වසංගත ආකාරයට ඇති විය.</span></p></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">සරුසාර වී වගාවක්</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/sera.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><span style="font-size: 12pt;">රසායනික පොහොර භාවිතය පළිබෝධ වර්ධනයට හිතකර පරිසරයක් ශාකයේ ඇති කරන ලඳි මේ හේතුව නිසා කාලයත් සමඟ පළිබෝධ වසංගත තත්ත්ව නිතර නිතර ඇතිවන සිද්ධියක් බවට පත්විය. මෙම තත්ත්වය අස්වැන්නට මෙන්ම ගොවියාගේ ආර්ථිකයටද බරපතල ලෙස අයහපත් ප්‍රතිඵල ගෙනදුනි.පළිබෝධ පාලනය සඳහා නව තාක්ෂණික කට්ටලයත් සමඟ හඳුන්වාදුන් පළිබෝධනාශක මුල් අවධියේ හොඳ ප්‍රතිඵල පෙන්වූ නමුත් පසුකාලීනව පළිබෝධනාශක ගොවීන්ගේ අවිධිමත් භාවිතය නිසා පළිබෝධ ගැටළු සංකීර්ණ වීමට හේතු විය</span></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="color:#000000;">දුඹුරු පැළ කීඩෑ හානිය නිසා ඇති වූ  ,කීඩෑ පිළිස්සීම</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/sera1.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><ul>
    <li>
    <div><span style="font-size: 12pt;">පළිබෝධ, පළිබෝධනාශකවලට ප්‍රතිරෝධීතාවයක් ගොඩනඟා ගැනීම නිසා එවකට පැවති .පැළ තවදුරටත් සාර්ථක නොවුණි. මේනිසා විවිධ නව පළිබෝධනාශක සෙවීමට වූ අතර ඒ සඳහා අධික වියදමක් දැරීමට සිදුවිය. එබැවින් පළිබෝධනාශකවල මිල සීඝ්‍ර ඉහළ යාම නිසා වගා වියදම වැඩිවිය.<br /><br /></span></div>
    </li>
    </ul>
    <div>
    <ul>
    <li><span style="font-size: 12pt;">පළිබෝධනාශක යෙදිමෙන් පසුද, පළිබෝධ පාලනය සිදුනොවන බව දුටු ගොවීන් නිතර නිතර </span><span style="font-size: 12pt;">අක්‍රමවත් ලෙස පළිබෝධනාශක යෙදිම නිසා ද වගා වියදම අධික ලෙස වැඩිවිය.</span></li>
    </ul>
    </div>
    <div>
    <ul>
    <li><span style="font-size: 12pt;">වගාවට පළිබෝධනාශක යෙදිමේදි ඉලක්ක නොකළ වෙනත් සතුන්</span><span style="font-size: 12pt;"> ලක්වීම.</span></li>
    </ul>
    </div>
    <div><span style="font-size: 12pt;">  උදාඃ මී මැස්සන්</span></div>
    <div><span style="font-size: 12pt;"> </span></div>
    <div>
    <ul>
    <li><span style="font-size: 12pt;">කලින් පළිබෝධ තත්ත්වයට පත්නොවී තිබුන</span><span style="font-size: 12pt;"> පළිබෝධ ප්‍රධාන පළිබෝධ බවට පත්වේ.</span></li>
    </ul>
    </div>
    <div><span style="font-size: 12pt;">  උදාඃ දුඹුරු පැළ කීඩෑවා<br /><br /></span></div>
    <div style="text-align: justify;">
    <ul>
    <li><span style="font-size: 12pt;">පරිසරයට එකතුවන පළිබෝධනාශක නිසා </span><span style="font-size: 12pt;">පද්ධති දූෂණයට ලක්වීම හා එමඟින් පද්ධති අනෙකුත් සංරචකවලට අහිත බලපෑම් එල්ලවීම </span></li>
    </ul>
    <ul>
    <li><span style="font-size: 12pt;">පළිබෝධනාශක යොදන්නන් නිසි ආරක්ෂක ක්‍රම </span><span style="font-size: 12pt;">නොපිළිපැම නිසා අනතුරුවලට ලක්වීම.</span></li>
    </ul>
    <ul>
    <li><span style="font-size: 12pt;">පළිබෝධනාශක යෙදිමෙන් පසු, අස්වනු නෙළීමට නියමිත දින ගණන පෙර අස්වනු කාලය</span><span style="font-size: 12pt;"> අනුගමනය නොකිරීම නිසා පාරිභෝගිකයා අනතුරට ලක්වීම</span></li>
    </ul>
    <ul>
    <li><span style="font-size: 12pt;">මෙම පළිබෝධනාශක සියල්ල විදේශ රටවල </span><span style="font-size: 12pt;">ගෙන්වන බැවින් අධික විදේශ </span><span style="font-size: 12pt;"> වැයවීම</span></li>
    </ul>
    <ul>
    <li><span style="font-size: 12pt;">වගාවේ දිගින් දිගටම පළිබෝධනාශක භාවිතය නිසා සිදුවන පළිබෝධ පුනරුත්ථානය</span></li>
    </ul>
    <p><span style="font-size: 12pt;">  (pest   resurgence)</span></p>
    </div>
    <div style="text-align: justify;"><span style="font-size: 12pt;">  <strong><br /></strong></span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">පළිබෝධනාශක අවධිමත් පරිහරණය නිසා වසංගත තත්ත්වයට පත්වූ දුඹුරු පැළ කීඩෑවා</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/sera2.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">මෙම ගැටළු ජය ගැනීමට නම් පළිබෝධනාශක භාවිතයේ යම් පාලනයක් හා විධිමත් බවක් ඇතිකළ යුතුවූ අතර පළිබෝධනාශක මත පමණක් විශ්වාසය තැබීම වෙනුවට වෙනත් විකල්ප පළිබෝධ පාලන ක්‍රම ද උපයෝගී කරගනිමින් අනුගමනය කරන උපාය මාර්ගයක අවශ්‍යතාවය ප්‍රබලව පැන නැගුනි.<br /><br /></span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;">පළිබෝධ පාලනයට භාවිතා කළ හැකි සියළුම ක්‍රමවේදයන් සුදුසු පරිදි මනා සංයමයකින් යුතුව භාවිතා කරමින් වගාවක පළිබෝධ ගහනය ආර්ථික හානිදායක නොවන මට්ටමක පවත්වා ගැනීම ඉහත අභියෝගය ජය ගැනීමට ඉදිරිපත් වූ එකම උපාය මාර්ගය විය. එය ඒකාබද්ධ පළිබෝධ පාලනය (Integrated Pest Management - IPM) ලෙස හැදින්වේ.</span></div>
    <p><strong> </strong></p></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><h3 class="sppb-addon-title" style="">ඒකාබද්ධ පළිබෝධ පාලන උපක්‍රම IPM</h3><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/sera3.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><p><span style="font-size: 12pt;">ආරම්භයේ පළිබෝධනාශක භාවිතය අඩු කිරීම ඉලක්ක කරගත් ඒකාබද්ධ පළිබෝධ පාලනය විවිධ සංවර්ධන අවධි පසුකරමින් පළිබෝධ හා හිතකර සතුන් පමණක් නොව සමස්ත වගා පරිසර පද්ධතියම විමසුමට ලක්කරමින් වගා නඩත්තුව පිළිබඳ සාමූහික තීරණ ගතයුතු අවධියකට දැන් පත්වී ඇත.</span></p>
    <p><span style="font-size: 12pt;">ඒ අනුව තිරසාර කෘෂිකර්මාන්තයකට අප යන ගමනේ ප්‍රධාන අවියක් බවට ඒකාබද්ධ පළිබෝධ පාලනය පත්ව ඇත.</span><span style="font-size: 12pt;">ඒකාබද්ධ පළිබෝධ පාලනය අනුගමනය කිරීමේ බොහෝ උපාය මාර්ග, යාය එකට සාමූහිකව අනුගමනය කළ යුතුව ඇත (උදාඃ බෝග මාරුව). මන්ද සමස්ත පරිසර පද්ධතිය හැසිරවීම මඟින් පළිබෝධ පාලනය මෙහි ප්‍රධාන අරමුණ වන බැවිනි.</span></p></div></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">හරිත විප්ලවයේ ප්‍රතිඵල ගොවීන් වෙත ගෙන යාම සඳහා අප භාවිතා කරනුයේ පර්යේෂණ අංශයේ සිට ව්යෙආප්තිකාරකයා දක්වාත් එතැනින් ගොවියා දක්වාත් පණිවිඩ ඉහළ සිට පහළට ගෙන යාමේ එක් දිශා (one way) සන්නිවේදන ක්‍රමවේදයකි.</span><br /><br /></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;">මෙම ක්‍රමයේදි පර්යේෂකයා කැමති ෙක්ෂ්ත්‍ර පිළිබඳ වැඩි අවධානයක් යොමුවන අතර ගොවියා ඇත්ත වශයෙන්ම ෙක්ෂ්ත්‍රයේ දි මුහුණ දෙන ප්‍රායෝගික ‍කේෂ්ත්‍ර ගැටළු ඉස්මතු නොවේ. එබැවින් බොහෝ පර්යේෂණ ප්‍රතිඵල විවිධ සීමාකාරී සාධක නිසා ගොවියා විසින් අනුගමනය නොකරයි.</span></div></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><img class="sppb-img-responsive" src="<?php echo base_url();?>assets/dist/img/sera4.JPG" alt=""></div></div><div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div><div class="sppb-addon sppb-addon-text-block sppb-text-left "><div class="sppb-addon-content"><div style="text-align: justify;"><span style="font-size: 12pt;">සමස්ථ පරිසර පද්ධතියම හැසිරවීම මඟින් සිදුකරන ඒකාබද්ධ පළිබෝධ පාලන වැඩසටහනකට අත්‍යවශහ් දැනුම හුරුව හා ගොවියාගේ ආත්ම විශ්වාසය දියුණු කිරීමට මෙම පුහුණු ක්‍රමවේදය ප්‍රමාණවත් තරම් ශක්තිමත් නොවන බව 1980 දශකයේ අග භාගය වන විට ව්‍යප්තිකාරකයන් විසින් මනාව අවබෝධකර ගෙන තිබුනි.තවද ඒකාබද්ධ පළිබෝධ පාලනය පිළිබඳ තාක්ෂණය ගොවිපලට ගෙනයාමේ දි ගොවියාගේ භූමිකාව වඩා වැදගත් බැව් පැහැදිලිව පෙනුනි.<br /><br /></span></div>
    <div style="text-align: justify;"><span style="font-size: 12pt;">එබැවින් තිරසාර කෘෂිකර්මාන්තයක් සඳහා අප යන ගමනේ නව තාක්ෂණය ගොවිපලට ගෙනයාමට ගොවියා මූලික කරගත් සහභාගීත්ව ප්‍රවේශයක අවශහ්තාවය පැන නැගුනි. එය සැපිරීමට එලිදැක්වූ සහභාගිත්ව පුහුණු ක්‍රමවේදය —ගොවි‍ේ කේෂ්ත්‍ර පාසැල් නමින් හැදින්වේ. ගොවි කේෂ්ත්‍ර පාසැලකට සහභාගිවන්නෙක් පළිබෝධ පාලනය සඳහා සහ උසස් අස්වැන්නක් සඳහා බෝගය ඇතුළු සමස්ථ පරිසර පද්ධතියම හැසිරවීම පිළිබඳ දැනුම හුරුව සහ අවබෝධය ලබා ගනී</span></div></div></div></div></div><div class="sppb-col-sm-3"><div class="sppb-addon-container" style=""></div></div></div></section>	</div>
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
