<?php
include "../../config/koneksi.php";

$id_anggota=$_GET['id_anggota'];

$query=mysqli_query($koneksi,"DELETE FROM anggota WHERE id_anggota='$id_anggota' ") or die(mysqli_error($koneksi));

if($query){
	$_SESSION["alert"]="Data Berhasil Dihapus";
	header("location: ../../pagetemplate.php?page=data_anggota");
}else{
	echo "Gagal";
}
 ?>