<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    <title>Register Page for Field Expert</title>
    <link href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "<?php echo base_url(); ?>assets/css/style.css" rel = "stylesheet">
    
    
    
  </head>


  <body class="bg">

    <div class="container">
      <div class="jumbotron1">
        <h1>Register  ලියාපදිංචි කරන්න</h1> 
        <p>Enter your Details here.</p> 
      </div>
  
    </div>
    

    <div class="container center_div">
      <div class="col-md-5 col-md-offset-3">
        
        <form action="" method="POST">
        <div class ="form-group">
            <label for="Username">Username</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>

        <div class ="form-group">
            <label for="Password">Password</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class ="form-group">
            <label for="ConfirmPassword">Confirm Password</label>
            <input class="form-control" name="confirmPassword" id="confirmPassword" type="password">
        </div>

        <div class ="form-group">
            <label for="Email">Email</label>
            <input class="form-control" name="email" id="email" type="text">
        </div>

        <div class ="form-group">
            <label for="Phone">Phone</label>
            <input class="form-control" name="phone" id="phone" type="text">
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

        </form>
      </div>
    </div>
    
    <script src="<?php echo base_url(); ?>assets/js/bootsrap.min.js"></script>
  </body>
</html>