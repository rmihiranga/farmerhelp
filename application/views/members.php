
<html>
<?php $this->load->view('component/admin_frame') ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>User Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Phone Number</th>
    <th>District</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php foreach($post as $posts){?>
     <tr>
         <td><?php echo $posts->username;?></td>
         <td><?php echo $posts->email?></td>
         <td><?php echo $posts->gender?></td>
         <td><?php echo $posts->phone?></td>
         <td><?php echo $posts->district?></td>
         <script>
    function edit(){
        
        $('#id').val("<?php echo $posts->id;?>")
        $('#username').val("<?php echo $posts->username;?>")
        $('#email').val("<?php echo $posts->email;?>") 
        $('#phone').val("<?php echo $posts->phone;?>") 
        $('#gender').val("<?php echo $posts->gender;?>") 
        $('#district').val("<?php echo $posts->district;?>") 
        
    }
  
    </script>
        <td><i onclick="edit()" class="fa fa-edit" style="font-size:30px;color:red"></i></td>
       <td><a href="<?php echo base_url() . "index.php/Member/delete_member/".$posts->id; ?>"class="fa fa-trash-o" style="font-size:36px"></i></td>
      </tr>     
     <?php }?>  
</table>

<form action="" method="POST">
        <div class ="form-group">
        <input class="form-control" name="id" id="id" type="hidden">
            <label for="Username">Username</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>

        <div class ="form-group">
            <label for="">Email</label>
            <input class="form-control" name="email" id="email" type="text">
        </div>

        <div class ="form-group">
            <label for="ConfirmPassword">Gender</label>
            <input class="form-control" name="gender" id="gender" type="text">
        </div>

        <div class ="form-group">
            <label for="Email">Phone</label>
            <input class="form-control" name="phone" id="phone" type="text">
        </div>

        <div class ="form-group">
            <label for="Phone">District</label>
            <input class="form-control" name="district" id="district" type="text">
        </div>
        <div>
          <button class="btn btn-primary" name="Update">Update</button>
        </div>
    </div>
    

       
</body>
</html>
