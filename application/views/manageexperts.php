
<html>
<?php $this->load->view('component/admin_frame') ?>

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

    <th>Phone Number</th>

    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php foreach($post as $posts){?>
     <tr>
         <td><?php echo $posts->username;?></td>
         <td><?php echo $posts->email?></td>
     
         <td><?php echo $posts->phone?></td>

        <td><i class="fa fa-edit" style="font-size:30px;color:red"></i></td>
       <td><i class="fa fa-trash-o" style="font-size:36px"></i></td>
      </tr>     
     <?php }?>  
</table>

<form action="" method="POST">
        <div class ="form-group">
            <label for="Username">Username</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>

        <div class ="form-group">
            <label for="">Password</label>
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

    </div>
    

       
</body>
</html>