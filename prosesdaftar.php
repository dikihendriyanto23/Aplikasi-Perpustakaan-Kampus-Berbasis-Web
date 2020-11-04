<?php 
include 'config/koneksi.php';

$id_admin=$_POST['id_admin'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($koneksi,"INSERT INTO admin (id_admin,nama,username,password) VALUES ('$id_admin','$nama','$username','$password')") or die(mysqli_error($koneksi));
if($query){
	echo '<script>alert("Anda Berhasil Mendaftar")';
	header("location: login.php");
}else{
	echo "Gagal";
}

?>
 ?>