<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/chatbox.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>



<div id="output"></div>
<form id="form_comment" >
  <div class="form-group required">
    <input type ="number" name ="comment_id" id= "commentId" hidden >
    <label class="exampleInput">Name  (නම)​ </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" >
   
  </div>
  <div class="form-group required">
    <label class="exampleInput">Enter Your Problem (ඔබට ඇති ගැටලුව සදහන් කරන්න)</label>
    <textarea type="text" class="form-control" id="textarea" placeholder="Enter here" name ="message" ></textarea>
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
			data : str,
			type : 'post',
			error: function (xhr, ajaxOptions, thrownError) {
                       alert(xhr.status);
                      alert(thrownError);
                      },
			success : function(data) {
			//	var result = eval('(' + response + ')');
			listComment();
        alert('sucess');
			
					$("#comment-message").css('display', 'inline-block');
					$("#name").val("");
					$("#textarea").val("");
					$("#commentId").val("");
					//listComment();
				
			}
			
		});
		
  });

$(document).ready(function () {
            	   listComment();
            });

function listComment() {
	$.post("<?php echo site_url('Message/chatlist')?>/",
                        function (data) {
                               var data = JSON.parse(data);

                            //alert(data[0]['name']);
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);
													
                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_id'];
																
                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['message'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
								
                        });
            }

			function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['message'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }

	</script>
<style>
	form{
position: fixed;
bottom: 0;
right: 0;
margin-left:700px;
width :100%;

}