<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    <title>Registration page</title>
    <link href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "<?php echo base_url(); ?>assets/css/style.css" rel = "stylesheet">
    
    
    
  </head>


  <body class="bg">

    

  
  <div class="container3">
    <div class="container2 ">
      <div class="col-md-12 col-md-offset-2"><br>
      <div class="container2">
      <h3 class="text-center pb-2 pt-2 "><strong>Register</strong></h3>
      
      </div>

        <?php if (isset($_SESSION['success'])) { ?>
          <script type='text/javascript'>alert('Registration Successfull')</script>
        <?php
        } ?>
        <?php echo validation_errors(); ?>
        <form action="" method="POST">
        <div class ="form-group">
            <input class="form-control" placeholder="Username" name="username" id="username" type="text">
        </div>

        <div class ="form-group">
            
            <input class="form-control" placeholder="Password" name="password" id="password" type="password">
        </div>

        <div class ="form-group">
            
            <input class="form-control" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" type="password">
        </div>

        <div class ="form-group">
            
            <input class="form-control" placeholder="Email" name="email" id="email" type="text">
        </div>

        <div class ="form-group">
            
            <input class="form-control" placeholder="Phone" name="phone" id="phone" type="text">
        </div>

        <div class ="form-group">
            <label for="Gender">Gender</label>
            <select class="form-control" name="gender" id="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
        </div>
        
        <div class ="form-group">
            <label for="District">District</label>
            <select class="form-control" name="district" id="district">
              <option value="Ampara">Ampara</option>
              <option value="Anuradhapura">Anuradhapura</option>
              <option value="Badulla">Badulla</option>
              <option value="Batticaloa">Batticaloa</option>
              <option value="Colombo">Colombo</option>
              <option value="Galle">Galle</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Hambantota">Hambantota</option>
              <option value="Jaffna">Jaffna</option>
              <option value="Kalutara">Kalutara</option>
              <option value="Kandy">Kandy</option>
              <option value="Kegalle">Kegalle</option>
              <option value="Kilinochchi">Kilinochchi</option>
              <option value="Kurunegala">Kurunegala</option>
              <option value="Mannar">Mannar</option>
              <option value="Matale">Matale</option>
              <option value="Matara">Matara</option>
              <option value="Monaragala">Monaragala</option>
              <option value="Mullaitivu">Mullaitivu</option>
              <option value="Nuwara Eliya">Nuwara Eliya</option>
              <option value="Polonnaruwa">Polonnaruwa</option>
              <option value="Puttalam">Puttalam</option>
              <option value="Ratnapura">Ratnapura</option>
              <option value="Trincomalee">Trincomalee</option>
              <option value="Vavuniya">Vavuniya</option>
            </select>
        </div>

        <div>
          <button class="btn btn-primary" name="register">Register</button>
          
        </div>
        <br>

        </form>
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
    padding-top:15px;
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