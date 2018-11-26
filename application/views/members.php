
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
        <td><i class="fa fa-edit" style="font-size:30px;color:red"></i></td>
       <td><i class="fa fa-trash-o" style="font-size:36px"></i></td>
      </tr>     
     <?php }?>  
</table>

    </div>


</html>
