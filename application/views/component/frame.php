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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/chatbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
          
        <?php
        if($_SESSION['user_logged']){
         //echo $this->session->userdata['username'];
          echo "<a href=".base_url()."index.php/Auth/logout class=\"btn btn-default btn-flat\">Logout</a>";

        }
        else{
          echo "<a href=".base_url()."index.php/Auth/login class=\"btn btn-default btn-flat\">Login</a>";
          echo "<a href=".base_url()."index.php/Auth/register class=\"btn btn-default btn-flat\">Register</a>";

        }      
           ?> 
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/picon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>  
        <?php
        if($_SESSION['user_logged']){
         echo $this->session->userdata['username'];
          //echo "<a href=".base_url()."index.php/Auth/logout class=\"btn btn-default btn-flat\">Logout</a>";
        }
      ?>  
      </p>
          <!-- <a href="<?php //echo base_url()."assets/";?>"="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- Sidebar user panel -->

     

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

            <i class="fa fa-dashboard"></i> <span>පළිබෝධ වර්ග​</span>

            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          <li><a href="<?php echo base_url();?>index.php/pesttypes/type1"><i class="fa fa-circle-o"></i> දිළීර​</a></li>
            <li><a href="<?php echo base_url();?>index.php/pesttypes/type2"><i class="fa fa-circle-o"></i> බැක්ටීරියා</a></li>
            <li><a href="<?php echo base_url();?>index.php/pesttypes/type3"><i class="fa fa-circle-o"></i> කෘමීන්</a></li>

          </ul>
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url();?>"="#">

            <i class="fa fa-dashboard"></i> <span>පළිබෝධ පාළනය​</span>

            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="active"><a href="<?php echo base_url();?>index.php/general_pest/profile"><i class="fa fa-circle-o"></i> සාමාන්‍ය (රසායනික)</a></li>
            <li><a href="<?php echo base_url();?>"="index2.html"><i class="fa fa-circle-o"></i> ඒකාබද්ධ පළිබෝධ​</a></li>
          </ul>
        </li>
        
        <li><a href="<?php echo base_url();?>index.php/Auth/choose"><i class="fa fa-book"></i> <span>විමසීම්</span></a></li>

        <li class="header">LABELS</li>
        <li><a href="<?php echo base_url();?>"="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="<?php echo base_url();?>"="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="<?php echo base_url();?>"="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
    
  </aside>