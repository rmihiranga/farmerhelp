
<?php $this->load->view('component/admin_frame') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php if (isset($_SESSION['success'])) { ?>
          <script type='text/javascript'>alert('Registration Successfull')</script>
        <?php
        } ?>
<form action="" method="POST">
<h2> Add Expert </h2>
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

        
        <div>
          <button class="btn btn-primary" name="register">Register</button>
        </div>

        </form>

        <script src="<?php echo base_url(); ?>assets/js/bootsrap.min.js"></script>