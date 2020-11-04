<div class="content-wrapper">
	<section class="content-header">
		<h1>PENGATURAN</h1>
		<ol class="breadcrumb">
	      <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
	      <li class="active">PENGATURAN</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header">
						<h2>PROFIL ADMIN</h2>
						<hr />
					</div>
					<?php  
						$data=mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$_SESSION[username]'") or die(mysqli_error($koneksi));;	
						$baris=mysqli_fetch_array($data); ?>
					<form>
						<div class="box-body">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" value="<?=$baris['nama']?>" disabled="on">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" value="<?=$baris['username']?>" disabled="on">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" name="password" class="form-control" value="<?=$baris['password']?>" disabled="on">
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>