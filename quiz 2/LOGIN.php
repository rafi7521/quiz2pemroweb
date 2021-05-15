<?php
$conn = mysqli_connect("localhost","root","","login");
session_start();


$username = $_POST['username'];
$password = $_POST['password'];
 
$database = mysqli_query($conn,"SELECT * FROM datauser WHERE username='$username' and password='$password'");
$result = mysqli_num_rows($sql);
 
if($result > 0){
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");
	
	echo "<script>alert('Selamat anda berhasil Login'); document.location.href = 'halaman.php';</script>";
}else{
	echo "<script>alert('Username atau Password Salah!'); document.location.href = 'halaman.php';</script>";
}

?>