<?php include('server.php'); ?>
<?php
	include 'db.php';
	$query = "SELECT * FROM chat ORDER BY id ASC";
	$run = $con->query($query);

	while($row = $run->fetch_array()) :
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat</title>
	<link rel="stylesheet" href="chat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div id="chat_data">
		<span style="color: black" class=""><?php echo $row['name']; ?> : <?php echo formatDate($row['date']); ?></span><br>
		<span style="color: light" class="btn btn-success disabled"><?php echo $row['msg']; ?> </span>
		<!-- <span style="float: right" class="border rounded"><?php //echo formatDate($row['date']); ?> </span> -->
	</div>
	</body>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
<?php endwhile; ?>