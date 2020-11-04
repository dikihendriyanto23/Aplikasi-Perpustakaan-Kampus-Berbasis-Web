<?php 
include 'config/koneksi.php';

$query=mysqli_query($koneksi,"SELECT max(id_admin) as kode from admin") or die(mysql_error($koneksi));
$data=mysqli_fetch_array($query);
$kode=substr($data['kode'],1,4);

$tambah=$kode+1;
  if ($tambah<10) {
    $id_admin="A000".$tambah;
  }else{
    $id_admin="A00".$tambah;
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Admin Perpustakaan</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style type="text/css">
		h3{
			text-align: center;
		}
		.card{
			margin: 125px;
			margin-right: 350px;
			margin-left: 350px;
			padding: 20px;
			border-radius: 3px;
			border-color: black;
		}
		#login{
			padding: 1em;
			margin: 2em auto;
		}
	</style>
</head>
<body class="bg-info">
	<div class="container" id="daftar">
		<div class="card">
			<h3>Daftar Admin Perpustakaan</h3><hr>
			<br>
			<form action="prosesdaftar.php" method="post">
				<input type="hidden" class="form-control" name="id_admin" value="<?php echo $id_admin ?>">
				<div class="form-group">
	                <label for="name">Nama Lengkap</label>
	                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
	            </div>
	            <div class="form-group">
	                <label for="username">Username</label>
	                <input class="form-control" type="text" name="username" placeholder="Username" required>
	            </div>
	            <div class="form-group">
	                <label for="password">Password</label>
	                <input class="form-control" type="password" name="password" placeholder="Password" required>
	            </div>

	            <input type="submit" class="btn btn-success btn-block" name="daftar" value="Daftar">
			</form>
		</div>
	</div>
</body>
</html>