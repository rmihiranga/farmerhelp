<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    <title>Login Page</title>

    <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    

    <link href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "<?php echo base_url(); ?>assets/css/style.css" rel = "stylesheet">
    
    
    
  </head>


  <body class="bg">

    <div class="container">
      <div class="jumbotron1">
        <h1>Login</h1> 
        <p>Enter your Details here.</p> 
      </div>

  
    </div>
    

    <div class="container center_div">
      <div class="col-md-5 col-md-offset-3">

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
        <div class ="form-group">
            <label for="Username">Username</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>

        <div class ="form-group">
            <label for="Password">Password</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        

        <div>
          <button class="btn btn-primary" name="login">Login</button>
        </div>

        </form>
      </div>
    </div>
    
    <script src="<?php echo base_url(); ?>assets/js/bootsrap.min.js"></script>
  </body>
</html>