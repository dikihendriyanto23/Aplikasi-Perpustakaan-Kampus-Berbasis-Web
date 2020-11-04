<?php 
include "../../config/koneksi.php";

$id_pinjam=$_POST['id_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];
$telat=$_POST['telat'];
$keterangan_buku=$_POST['keterangan_buku'];
$denda_telat=$_POST['denda_telat'];
$denda_buku=$_POST['denda_buku'];
$total_denda=$_POST['total_denda'];
$status_buku='Kembali';
$total_denda=$denda_buku+$denda_telat;

$query=mysqli_query($koneksi,"UPDATE peminjaman SET tgl_kembali='$tgl_kembali', telat='$telat', keterangan_buku='$keterangan_buku', denda_telat='$denda_telat', denda_buku='$denda_buku', status_buku='$status_buku', total_denda='$total_denda' WHERE id_pinjam = '$id_pinjam'") or die(mysqli_error($koneksi));
 
echo "<script>
    alert('Tambah Pengembalian Berhasil. . .')
    window.location='../../pagetemplate.php?page=data_pengembalian';
</script>";
?>