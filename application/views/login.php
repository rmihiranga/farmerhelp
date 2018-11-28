<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    <title>Login Page</title>

   <!-- <img src="<?php //echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
    

    <link href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "<?php echo base_url(); ?>assets/css/style.css" rel = "stylesheet">
    
    
    
  </head>

  <body class="bg">
    

    
    
<div class="container3">
    <div class="container2 ">
      <div class="col-md-12 col-md-offset-2"><br>
      <div class="container2">
      <h3 class="text-center pb-2 pt-2 "><strong>Login</strong></h3>
</div>
      
        
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
          <script type='text/javascript'>alert('Login Successfull')</script>
        <?php
        } ?>
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger"> <?php echo $_SESSION['error']; ?> </div>
          
        <?php
        } ?>
        <?php echo validation_errors(); ?>
        <form action="" method="POST">
          <br>
        <div class ="form-group">
            
            <input class="form-control" placeholder="Username" name="username" id="username" type="text">
        </div>

        <div class ="form-group">
            
            <input class="form-control" placeholder="Password" name="password" id="password" type="password">
        </div>

        

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
          <button class="btn btn-primary mb-2 "  name="login">Login</button>
      </div>
      <div class="col-md-4"></div>
        </div>

        </form>
      </div>
    </div>
      </div>
    
    <script src="<?php echo base_url(); ?>assets/js/bootsrap.min.js"></script>
  </body>
  <style>
    .container2 { 
    width: 35%;
    box-shadow:0px 0px 12px #828282;

    padding-right: 15px;
    padding-left: 15px;
    margin-top: auto;
    margin-bottom:auto;
    margin-right:auto;
    margin-left:auto;
    }

    .container3 { 
    
    width: 100%;
    padding-top:150px;
    padding-right: 15px;
    padding-left: 15px;
    margin: auto;
    
}

  body{
    background-color: #cccccc;
    background-image: url("<?php echo base_url(); ?>assets/dist/img/Farm.jpg");
  }
  
}
    </style>
</html>