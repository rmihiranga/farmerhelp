
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/chatbox.css">
<script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>
<form id="form_comment" >
  <div class="form-group required">
    <input type ="number" name ="comment_id" id= "commentId" hidden >
    <label class="exampleInput">Name  (නම)​ </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required >
   
  </div>
  <div class="form-group required">
    <label class="exampleInput">Enter Your Problem (ඔබට ඇති ගැටලුව සදහන් කරන්න)</label>
    <textarea type="text" class="form-control" id="textarea" placeholder="Enter here" name ="message" required></textarea>
  </div>
  
  <input type="button" class="btn-submit" id="submitButton"
                    value="Publish" />
  <div id="comment-message">Comments Added Successfully!</div>
</form>

<script>
  function postReply(commentId) {
		$('#commentId').val(commentId);
		$("#name").focus();
  }
  $("#submitButton").click(function()
  {
		
		$("#comment-message").css('display', 'none');
		 str = $("#form_comment").serialize();
		var comment_id = $('#commentId').val();
		var name = $('#name').val();
    var message = $('#textarea').val();
	//	alert(str);
    
		$.ajax({
			
			url : "<?php echo site_url('Message/chatbox')?>/",
		//	dataType :"json",
			data : {comment_id:comment_id,name:name,message:message},
			type : 'post',
			error: function (xhr, ajaxOptions, thrownError) {
                       alert(xhr.status);
                      alert(thrownError);
                      },
			success : function(data) {
			//	var result = eval('(' + response + ')');
				
        alert('sucess');
			
					$("#comment-message").css('display', 'inline-block');
					$("#name").val("");
					$("#textarea").val("");
					$("#commentId").val("");
					//listComment();
				
			}
			
		});
  });




  </script>