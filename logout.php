<?php 
session_start();

unset($_SESSION["username"]);
$_SESSION["alert"]="Anda Berhasil Logout";

header("Location:login.php");
 ?>
