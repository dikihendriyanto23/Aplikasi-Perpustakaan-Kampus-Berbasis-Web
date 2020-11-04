<?php
include "../../config/koneksi.php";

$kd_buku=$_POST['kd_buku'];
$isbn=$_POST['isbn'];
$judul_buku=$_POST['judul_buku'];
$tahun=$_POST['tahun'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$jumlah_buku=$_POST['jumlah_buku'];

$query=mysqli_query($koneksi,"INSERT INTO buku (kd_buku,isbn,judul_buku,tahun,pengarang,penerbit,jumlah_buku) VALUES ('$kd_buku','$isbn','$judul_buku','$tahun','$pengarang','$penerbit','$jumlah_buku')") or die(mysqli_error($koneksi));
if($query){
	echo '<script>alert("Data Berhasil Ditambahkan !!!")';
	header("location:../../pagetemplate.php?page=data_buku");
}else{
	echo "Gagal";
}

?>