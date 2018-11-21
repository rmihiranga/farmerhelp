
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<form action = "<?php echo site_url('Message/chatbox')?>" method ="post">
  <div class="form-group required">
    <input type ="number" hidden>
    <label class="exampleInput">Name  (නම)​ </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name" required >
   
  </div>
  <div class="form-group required">
    <label class="exampleInput">Enter Your Problem (ඔබට ඇති ගැටලුව සදහන් කරන්න)</label>
    <textarea type="text" class="form-control" id="textarea" placeholder="Enter here" name ="message" required></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<style>
    .form-group{
        width:50%
    }
    #textarea{
        height:120px;
    }
    .form-group.required .exampleInput:after {
  content:"*";
  color:red;
}
    form{
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    margin: 0 auto;
    }
    </style>