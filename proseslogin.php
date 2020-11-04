<?php 
session_start();

$koneksi=mysqli_connect("localhost","root","","perpus");
$username=$_POST["username"];
$password=$_POST["password"];
$nama=$_POST["nama"];
$query=mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'") or die(mysqli_error($koneksi));

if ($data=mysqli_fetch_array($query)) {
	$_SESSION["username"]=$data["username"];
	$_SESSION["alert"]="Anda Berhasil Login";
	header("Location:pagetemplate.php");
}else{
	$_SESSION["alert"]="Username atau Password Salah";
	header("Location:login.php");
}
?>