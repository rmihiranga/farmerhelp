<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/chatbox.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


<div class =chat>
<h2>ඔබගේ ගැටලූ අප වෙත යොමුකරන්න​.</h2>
<form id="form_reply"  >
  <div class="form-group required">
    <input type ="number" name ="comment_id" id= "rcommentId" hidden >
    <label class="exampleInput">Name  (නම)​ </label>
    <input type="text" class="form-control" id="rname" name="name" placeholder="Enter name" >
   
  </div>
  <div class="form-group required">
    <label class="exampleInput">Enter Your response (ඔබට ඇති ගැටලුව සදහන් කරන්න)</label>
    <textarea type="text" class="form-control" id="rtextarea" placeholder="Enter here" name ="message" ></textarea>
  </div>
  
  <input type="button" class="btn-submit" id="replyButton"
                    value="Publish" />
  <div id="rcomment-message">Reply Added Successfully!</div>
</form>
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
<h2>ඔබ අප වෙත යොමුකරන ලද ගැටලු සහ ඒවාට විසදුම්.</h2>
<div id="output"></div>
</div>
<script>
var parent_id;
  function showReply(commentId) 
  {
    document.getElementById('form_reply').style.visibility = "visible";
    $("#form_reply").css( {position:"absolute", top:event.pageY, left: event.pageX});
    $("#form_reply").toggle();
    parent_id=commentId;
    
  }
		
  
  
  $("#replyButton").click(function()
  {
	
		$("#comment-message").css('display', 'none');
		 str = $("#form_reply").serialize();
		var comment_id = $('#rcommentId').val();
		var name = $('#rname').val();
        var message = $('#rtextarea').val();
        alert(name);
    
		$.ajax({
			url : "<?php echo site_url('Message/chatbox')?>/",
		//	dataType :"json",
			data : {comment_id:comment_id,name:name,message:message,parent_id:parent_id},
			type : 'post',
			error: function (xhr, ajaxOptions, thrownError) {
                       alert(xhr.status);
                      alert(thrownError);
                      },
                      success: function (response)
                    {
                        //var result = eval('(' + response + ')');
                        if (response)
                        {
                           // alert('frf');
                        	$("#comment-message").css('display', 'inline-block');
                            $("#rname").val("");
                            $("#rtextarea").val("");
                            $("#rcommentId").val("");
                            $("#form_reply").toggle();
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
			
		});
		
  });
  $("#submitButton").click(function()
  {
    parent_id=0;
		$("#comment-message").css('display', 'none');
		 str = $("#form_comment").serialize();
		var comment_id = $('#commentId').val();
		var name = $('#name').val();
        var message = $('#textarea').val();
	
    
		$.ajax({
			
			url : "<?php echo site_url('Message/chatbox')?>/",
		//	dataType :"json",
			data : {comment_id:comment_id,name:name,message:message,parent_id:parent_id},
			type : 'post',
			error: function (xhr, ajaxOptions, thrownError) {
                       alert(xhr.status);
                      alert(thrownError);
                      },
                      success: function (response)
                    {
                        //var result = eval('(' + response + ')');
                        if (response)
                        {
                           // alert('frf');
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#textarea").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
			
		});
		
  });

$(document).ready(function () {
            	   listComment();
                   document.getElementById('form_reply').style.visibility = "hidden";
                   $("#form_reply").toggle();

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
                                    "<div><a class='btn-reply' onClick='showReply(" + commentId + ")'>Reply</a></div>"+
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
                        "<div><a class='btn-reply' onClick='showReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
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
.form-group{
    width:80%
}
#textarea{
    height:120px;
}
.form-group.required .exampleInput:after {
content:"*";
color:red;
}
form{
    background-color:gray;
}
#form_comment{

width :100%;

}
body {
	font-family: Arial;
	width: 1100px;
}

.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 2px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 2px;
    cursor:pointer;
}

ul {
	list-style-type: none;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
}

span.commet-row-label {
	font-style: italic;
}

span.posted-by {
	color: #09F;
}

.comment-info {
	font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
.chat{
    margin-left:300px;
}
</style>
