<?php
include "../../config/koneksi.php";

$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$npm=$_POST['npm'];
$tgl_lahir=$_POST['tgl_lahir'];
$no_hp=$_POST['no_hp'];
$jk=$_POST['jk'];
$thn_angkatan=$_POST['thn_angkatan'];
$prodi=$_POST['prodi'];
$fakultas=$_POST['fakultas'];

$query=mysqli_query($koneksi,"INSERT INTO anggota (id_anggota,nama,npm,tgl_lahir,no_hp,jk,thn_angkatan,prodi,fakultas) VALUES ('$id_anggota','$nama','$npm','$tgl_lahir','$no_hp','$jk','$thn_angkatan','$prodi','$fakultas')") or die(mysqli_error($koneksi));
if($query){
	echo '<script>alert("Data Berhasil Ditambahkan !!!")';
	header("location:../../pagetemplate.php?page=data_anggota");
}else{
	echo "Gagal";
}

?>