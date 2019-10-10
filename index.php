<?php
 session_start();

 if(isset($_SESSION['username'])){

 	$username = $_SESSION['username'];
 }else{
 	header("location:login.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>.::Login::.</title>
</head>
<body>
	<div id="profile">
		<b id="welcome">Alhamdulillah tugasku mari : <i><?php echo $username; ?></i></b>
		<b id="logout"><a href="logout.php">Logout</a></b>
	</div>
</body>
</html>