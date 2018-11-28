
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<table id="customers">
  <tr>
    <th>User Name</th>
    <th>Email</th>

    <th>Phone Number</th>

    <th>Update</th>
    <th>Delete</th>
    <th>Send email</th>
  </tr>
  
  <?php foreach($post as $posts){?>
     <tr>
         <td><?php echo $posts->username;?></td>
         <td><?php echo $posts->email?></td>
     
         <td><?php echo $posts->phone?></td>
         <script>
    function edit(){
        $('#id').val("<?php echo $posts->id;?>")
        $('#username').val("<?php echo $posts->username;?>")
        $('#email').val("<?php echo $posts->email;?>") 
        $('#phone').val("<?php echo $posts->phone;?>") 
    }
    </script>
    <?php
    $msg = "thank you for joining with us your user name is".$posts->username."%20and%20your%20password%20is".$posts->password;
    function sendMail($msg,$resiver)
      {
          $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'laahirudulanjaya@gmail.com', // change it to yours
        'smtp_pass' => 'passward1223', // change it to yours
        'mailtype' => "html",
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      );

              $message = $msg;
              $this->load->library('email', $config);
              $this->email->initialize($config);

            $this->email->set_newline("\r\n");
            $this->email->from('laahirudulanjaya@gmail.com'); // change it to yours
            $this->email->to($receiver);// change it to yours
            $this->email->subject('Farmer help Expert\'s account');
            $this->email->message($message);
            if($this->email->send())
           {
            echo 'Email sent.';
           // redirect(base_url(),"refresh");
           }
           else
          {
           show_error($this->email->print_debugger());
          }
      
      }
    ?>
        <td><a onclick="edit()" class="fa fa-edit" style="font-size:30px;color:red"></i></td>
       <td><a href="<?php echo base_url() . "index.php/Expert/delete_expert/".$posts->id; ?>" class="fa fa-trash-o" style="font-size:36px"></i></td>
       <td><a href="<?php echo base_url() . "index.php/Email/sendMail/".$msg."/".$posts->email; ?>" class="fa fa-envelope-o" style="font-size:30px;color:red"></i></td>

    </tr>   
      
     <?php }?>  
</table>
<h1> Update Expert </h1>
<form action="" method="POST">
<input class="form-control" name="id" id="id" type="hidden" >
        <div class ="form-group">
            <label for="Username">Username</label>
            <input class="form-control" name="username" id="username" type="text">
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
          <button class="btn btn-primary" name="Update">Update</button>
        </div>

        </form>
    <style>
    .form-group
    {
        width:50%;
    }
    
       
</body>
</html>
