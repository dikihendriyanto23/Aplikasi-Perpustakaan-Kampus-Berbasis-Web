<?php 
include "../../config/koneksi.php";

$kd_bukulama=$_GET['kd_buku'];
$kd_buku=$_POST['kd_buku'];
$isbn=$_POST['isbn'];
$judul_buku=$_POST['judul_buku'];
$tahun=$_POST['tahun'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$jumlah_buku=$_POST['jumlah_buku'];

$query=mysqli_query($koneksi,"UPDATE buku SET kd_buku='$kd_buku',isbn='$isbn',judul_buku='$judul_buku',tahun='$tahun',pengarang='$pengarang',penerbit='$penerbit',jumlah_buku='$jumlah_buku' WHERE kd_buku='$kd_bukulama'") or die(mysqli_error($koneksi));

if(query){
	header("location:../../pagetemplate.php?page=data_buku");
}else{
	echo "Gagal";
}

 ?>