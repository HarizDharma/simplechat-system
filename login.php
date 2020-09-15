<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Masuk Chat Pasien</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="header">
		<h2>Masuk</h2>
	</div>

	<form method="post" action="login.php">
		<!--display errors-->
		<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="Password" name="password1">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Masuk</button>
		</div>
		<p>
			Belum daftar ? Daftar disini <a href="register.php">Daftar</a>
		</p>
	</form>
</body>
</html>