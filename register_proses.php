<?php
// membuat koneksi 
$con = mysqli_connect("localhost","root","","latihan_php");

// Deklarasi variable
$username = $_POST['username'];
$password = $_POST['password'];
$submit =$_POST['submit'];

if(isset($submit)){

	if(empty($username) or empty($password)){

		echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('register.html') </script>";
	}else{

		$pass = md5($_POST['password']);
		$ins = mysqli_query($con,"insert into login(user_login,pass_login) values ('$username','$pass')");
		echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";
	}
}
?>