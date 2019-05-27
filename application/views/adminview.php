<?php $this->load->view('component/admin_frame') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

<div class="card">
  <img id="img" src="<?php echo base_url();?>assets/dist/img/21.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Total Users</b></h4> 
    <p>6</p> 
  </div>
</div>

  

</body>


<style>
    #img{
        height:300px;
        width:300px;
    }
    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    height:50%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
    </style>

