<?php include 'db.php'; ?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Box</title>
	<link rel="stylesheet" href="style.css" media="all">
	<script type="text/javascript">
		function ajax() {

			var req = new XMLHttpRequest();

			req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat.php', true);
			req.send();

		}
		setInterval(function() {ajax()}, 1000);
	</script>
	<link rel="stylesheet" href="chat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body onload="ajax();">

<div id="container">
	<div id="chat_box">
		<div id="chat"></div>
	</div>
	<form method="post" action="home.php">
		<textarea name="msg" placeholder="enter message" maxlength="150"></textarea>
		<input type="submit" name="submit" value="Send it">
		
	</form><br>
	<div class="text-center">
		<p><a href="home.php?logout='1'" style="color: white"; class="btn btn-primary">Logout</a></p>
	</div>
	<?php 
	if(isset($_POST['submit'])) {
		$msg = $_POST['msg'];
		$name=$_SESSION['username'];
		$query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg') "; 

		$run = $con->query($query);

		if($run) {
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		}

	}
	?>
</div>


</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>