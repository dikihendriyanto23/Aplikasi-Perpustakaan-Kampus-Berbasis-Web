<?php
include "../../config/koneksi.php";

$id_anggota=$_POST['id_anggota'];
$kd_buku=$_POST['kd_buku'];
$id_pinjam=$_POST['id_pinjam'];
$tgl_pinjam=Date('Y-m-d');
$tgl_kembali='';
$telat=0;
$keterangan_buku='';
$denda_telat=0;
$denda_buku=0;
$total_denda=0;
$status_buku='Pinjam';


$query=mysqli_query($koneksi,"INSERT INTO peminjaman (id_pinjam,id_anggota,kd_buku,tgl_pinjam,tgl_kembali,telat,keterangan_buku,denda_telat,denda_buku,total_denda,status_buku) VALUES ('$id_pinjam','$id_anggota','$kd_buku','$tgl_pinjam','$tgl_kembali','$telat','$keterangan_buku','$denda_telat','$denda_buku','$total_denda','$status_buku')") or die(mysqli_error($koneksi));
if($query){
	echo '<script>alert("Data Berhasil Ditambahkan !!!")';
	header("location:../../pagetemplate.php?page=data_peminjaman");
}else{
	echo "Gagal";
}

?>