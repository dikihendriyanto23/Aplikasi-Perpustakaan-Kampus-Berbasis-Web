<?php 
include "../../config/koneksi.php";

$id_anggotalama=$_GET['id_anggota'];
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$npm=$_POST['npm'];
$tgl_lahir=$_POST['tgl_lahir'];
$no_hp=$_POST['no_hp'];
$jk=$_POST['jk'];
$thn_angkatan=$_POST['thn_angkatan'];
$prodi=$_POST['prodi'];
$fakultas=$_POST['fakultas'];

$query=mysqli_query($koneksi,"UPDATE anggota SET id_anggota='$id_anggota',nama='$nama',npm='$npm',tgl_lahir='$tgl_lahir',no_hp='$no_hp',jk='$jk',thn_angkatan='$thn_angkatan',prodi='$prodi',fakultas='$fakultas' WHERE id_anggota='$id_anggotalama'") or die(mysqli_error($koneksi));

if(query){
	header("location:../../pagetemplate.php?page=data_anggota");
}else{
	echo "Gagal";
}

 ?>