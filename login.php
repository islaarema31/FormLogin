<?php
session_start();
if(isset($_SESSION['username'])){

	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>.::Login::.</title>
</head>
<body>

<div id="main">
	<h1><center> Login </center></h1>
	<div id="login">
		<h2>Login Form</h2>
		<form action="login_proses.php" method="post">
			<label>User Name :</label>
			<input id="name" name="username" placeholder="username" type="text">

			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">

			<input name="login" type="submit" value=" Login "><br>
			<a href="register.html">Belum Punya Account? Daftar</a>
		</form>
	</div>
</div>
</body>
</html>