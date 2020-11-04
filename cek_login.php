<?php 

if (empty($_SESSION["username"])) {
	$_SESSION["alert"]="Anda Harus Login Terlebih Dahulu";
	header("Location:login.php");
}

 ?>