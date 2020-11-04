<?php
include "../../config/koneksi.php";

$id_pinjam=$_GET['id_pinjam'];

$query=mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id_pinjam='$id_pinjam' ") or die(mysqli_error($koneksi));

if($query){
	$_SESSION["alert"]="Data Berhasil Dihapus";
	header("location: ../../pagetemplate.php?page=data_pengembalian");
}else{
	echo "Gagal";
}
 ?>