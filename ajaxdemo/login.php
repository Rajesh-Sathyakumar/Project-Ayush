
<html>
<head>
<title>LOGIN</title>
<script type = "text/javasript" src = "js/jquery-3.2.0.js"> </script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type = "text/javascript">
$(document).ready(function(){
	$('#submit').click(function(event){
		event.preventDefault();
		$.ajax({
			url : "insert.php",
			method : "post",
			data : $('form').serialize(),
			dataType : "text",
			success : function(strMessage){
				$('#message').text(strMessage)
			}
		})
	})
})
</script>
</head>
<body>
<div>
<p id = "message"></p>
<form method="POST">
<br>
<br>
<input type ="email" id = "email" name = "email" placeholder="Email"><br>
<br>
<input type ="password" id ="password" name="password" placeholder="Password"><br><br>
<input type="submit" name="submit" id="submit">
</form>
</div>
</body>
</html>