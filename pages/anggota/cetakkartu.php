<!DOCTYPE html>
<html>
<head>
	<title>Cetak Kartu Perpustakaan</title>
</head>
<body>
 
	<center>
 
		<h2>Cetak Kartu Anggota</h2>
		<h4>Perpustakaan</h4>
 
	</center>
 
	<?php 
	include '../../config/koneksi.php';
	?>
 
 	<fieldset style="margin-left: 210px; margin-right: 210px;">
	<table>
		<tr>
			<td colspan="3" style="text-align: center;"><h3>KARTU ANGGOTA<br>PERPUSTAKAAN</h3></td>
		</tr>
		<?php 
		$id_anggota=$_GET['id_anggota'];
		$data = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota='$id_anggota'") or die(mysqli_error($koneksi));
		while($baris = mysqli_fetch_array($data)){ 
		?>
		<tr>
			<td>ID Anggota</td>
			<td>:</td>
			<td><?php echo $baris['id_anggota']; ?></td>
		</tr>
		<tr>
			<td>Nama Anggota</td>
			<td>:</td>
			<td><?php echo $baris['nama']; ?></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td>:</td>
			<td><?php echo $baris['npm']; ?></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><?php echo $baris['prodi']; ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><?php echo $baris['fakultas']; ?></td>
		</tr>

		<?php 
		}
		?>
	</table>
 	</fieldset>

	<script>
		window.print();
	</script>
 
</body>
</html>