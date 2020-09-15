<!--By manoj-->

<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Pasien</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="header">
		<h2>Daftar</h2>
	</div>

	<form method="post" action="register.php">
		<!--errors display-->
		<?php include('errors.php');?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="Password" name="password1">
		</div>
		<div class="input-group">
			<label>Verifikasi Password</label>
			<input type="Password" name="password2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Daftar</button>
		</div>
		<p>
			Sudah Daftar?<a href="login.php">Masuk</a>
		</p>
	</form>
</body>
</html>