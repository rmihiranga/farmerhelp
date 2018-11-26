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
         echo $this->session->userdata['username'];
          echo "<a href=\"Auth/logout\" class=\"btn btn-default btn-flat\">Logout</a>";

        }
        else{
        echo "<a href=\"index.php/Auth/login\" class=\"btn btn-default btn-flat\">Login</a>";
        echo "<a href=\"index.php/Auth/register\"=\"#\" class=\"btn btn-default btn-flat\">Register</a>";
        }      
           ?> 
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
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
        
        <li><a href="<?php echo base_url();?>index.php/Message/chatboxx"><i class="fa fa-book"></i> <span>විමසීම්</span></a></li>
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
      <h1>
        ChatBox      
    </section>

    <!-- Main content -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

   
    <div class =chat>
    <h2>ඔබගේ ගැටලූ අප වෙත යොමුකරන්න​.</h2>
    <form id="form_reply"  >
    <div class="form-group required">
        <input type ="number" name ="comment_id" id= "rcommentId" hidden >
        <label class="exampleInput">Name  (නම)​ </label>
        <input type="text" class="form-control" id="rname" name="name" placeholder="Enter name" >
    
    </div>
    <div class="form-group required">
        <label class="exampleInput">Enter Your response (ඔබට ඇති ගැටලුව සදහන් කරන්න)</label>
        <textarea type="text" class="form-control" id="rtextarea" placeholder="Enter here" name ="message" ></textarea>
    </div>
    
    <input type="button" class="btn-submit" id="replyButton"
                        value="Publish" />
    <div id="rcomment-message">Reply Added Successfully!</div>
    </form>
    <form id="form_comment" >
    <div class="form-group required">
        <input type ="number" name ="comment_id" id= "commentId" hidden >
        <label class="exampleInput">Name  (නම)​ </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" >
    
    </div>
    <div class="form-group required">
        <label class="exampleInput">Enter Your Problem (ඔබට ඇති ගැටලුව සදහන් කරන්න)</label>
        <textarea type="text" class="form-control" id="textarea" placeholder="Enter here" name ="message" ></textarea>
    </div>
    
    <input type="button" class="btn-submit" id="submitButton"
                        value="Publish" />
    <div id="comment-message">Comments Added Successfully!</div>
    </form>
  
    <h2>ඔබ අප වෙත යොමුකරන ලද ගැටලු සහ ඒවාට විසදුම්.</h2>
    <div id="output"></div>
    </div>
    <script>
    var parent_id;
    function showReply(commentId) 
    {
        document.getElementById('form_reply').style.visibility = "visible";
        $("#form_reply").css( {position:"absolute", top:event.pageY, left: event.pageX});
        $("#form_reply").toggle();
        parent_id=commentId;
        
    }
            
    
    
    $("#replyButton").click(function()
    {
        
            $("#comment-message").css('display', 'none');
            str = $("#form_reply").serialize();
            var comment_id = $('#rcommentId').val();
            var name = $('#rname').val();
            var message = $('#rtextarea').val();
            alert(name);
        
            $.ajax({
                url : "<?php echo site_url('Message/chatbox')?>/",
            //	dataType :"json",
                data : {comment_id:comment_id,name:name,message:message,parent_id:parent_id},
                type : 'post',
                error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                        },
                        success: function (response)
                        {
                            //var result = eval('(' + response + ')');
                            if (response)
                            {
                            // alert('frf');
                                $("#comment-message").css('display', 'inline-block');
                                $("#rname").val("");
                                $("#rtextarea").val("");
                                $("#rcommentId").val("");
                                $("#form_reply").toggle();
                            listComment();
                            } else
                            {
                                alert("Failed to add comments !");
                                return false;
                            }
                        }
                
            });
            
    });
    $("#submitButton").click(function()
    {
        parent_id=0;
            $("#comment-message").css('display', 'none');
            str = $("#form_comment").serialize();
            var comment_id = $('#commentId').val();
            var name = $('#name').val();
            var message = $('#textarea').val();
        
        
            $.ajax({
                
                url : "<?php echo site_url('Message/chatbox')?>/",
            //	dataType :"json",
                data : {comment_id:comment_id,name:name,message:message,parent_id:parent_id},
                type : 'post',
                error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                        },
                        success: function (response)
                        {
                            //var result = eval('(' + response + ')');
                            if (response)
                            {
                            // alert('frf');
                                $("#comment-message").css('display', 'inline-block');
                                $("#name").val("");
                                $("#textarea").val("");
                                $("#commentId").val("");
                            listComment();
                            } else
                            {
                                alert("Failed to add comments !");
                                return false;
                            }
                        }
                
            });
            
    });

    $(document).ready(function () {
                    listComment();
                    document.getElementById('form_reply').style.visibility = "hidden";
                    $("#form_reply").toggle();

                });

    function listComment() {
        $.post("<?php echo site_url('Message/chatlist')?>/",
                            function (data) {
                                var data = JSON.parse(data);

                                //alert(data[0]['name']);
                                var comments = "";
                                var replies = "";
                                var item = "";
                                var parent = -1;
                                var results = new Array();

                                var list = $("<ul class='outer-comment'>");
                                var item = $("<li>").html(comments);
                                                        
                                for (var i = 0; (i < data.length); i++)
                                {
                                    var commentId = data[i]['comment_id'];
                                    parent = data[i]['parent_id'];
                                                                    
                                    if (parent == "0")
                                    {
                                        comments = "<div class='comment-row'>"+
                                        "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                        "<div class='comment-text'>" + data[i]['message'] + "</div>"+
                                        "<div><a class='btn-reply' onClick='showReply(" + commentId + ")'>Reply</a></div>"+
                                        "</div>";

                                        var item = $("<li>").html(comments);
                                        list.append(item);
                                        var reply_list = $('<ul>');
                                        item.append(reply_list);
                                        listReplies(commentId, data, reply_list);
                                    }
                                }
                                $("#output").html(list);
                                    
                            });
                }

                function listReplies(commentId, data, list) {
                    for (var i = 0; (i < data.length); i++)
                    {
                        if (commentId == data[i].parent_id)
                        {
                            var comments = "<div class='comment-row'>"+
                            " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                            "<div class='comment-text'>" + data[i]['message'] + "</div>"+
                            "<div><a class='btn-reply' onClick='showReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                            "</div>";
                            var item = $("<li>").html(comments);
                            var reply_list = $('<ul>');
                            list.append(item);
                            item.append(reply_list);
                            listReplies(data[i].comment_id, data, reply_list);
                        }
                    }
                }

        </script>
    <style>
    .form-group{
        width:80%
    }
    #textarea{
        height:120px;
    }
    .form-group.required .exampleInput:after {
    content:"*";
    color:red;
    }
    form{
        background-color:gray;
    }
    #form_comment{

    width :100%;

    }
    body {
        font-family: Arial;
        width: 100%;
    }

    .comment-form-container {
        background: #F0F0F0;
        border: #e0dfdf 1px solid;
        padding: 20px;
        border-radius: 2px;
    }

    .input-row {
        margin-bottom: 20px;
    }

    .input-field {
        width: 100%;
        border-radius: 2px;
        padding: 10px;
        border: #e0dfdf 1px solid;
    }

    .btn-submit {
        padding: 10px 20px;
        background: #333;
        border: #1d1d1d 1px solid;
        color: #f0f0f0;
        font-size: 0.9em;
        width: 100px;
        border-radius: 2px;
        cursor:pointer;
    }

    ul {
        list-style-type: none;
    }

    .comment-row {
        border-bottom: #e0dfdf 1px solid;
        margin-bottom: 15px;
        padding: 15px;
    }

    .outer-comment {
        background: #F0F0F0;
        padding: 20px;
        border: #dedddd 1px solid;
    }

    span.commet-row-label {
        font-style: italic;
    }

    span.posted-by {
        color: #09F;
    }

    .comment-info {
        font-size: 0.8em;
    }
    .comment-text {
        margin: 10px 0px;
    }
    .btn-reply {
        font-size: 0.8em;
        text-decoration: underline;
        color: #888787;
        cursor:pointer;
    }
    #comment-message {
        margin-left: 20px;
        color: #189a18;
        display: none;
    }
    
    </style>

    

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

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
