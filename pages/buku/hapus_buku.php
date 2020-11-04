<?php
include "../../config/koneksi.php";

$kd_buku=$_GET['kd_buku'];

$query=mysqli_query($koneksi,"DELETE FROM buku WHERE kd_buku='$kd_buku' ") or die(mysqli_error($koneksi));

if($query){
	$_SESSION["alert"]="Data Berhasil Dihapus";
	header("location: ../../pagetemplate.php?page=data_buku");
}else{
	echo "Gagal";
}
 ?>