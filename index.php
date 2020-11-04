<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Perpustakaan</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<style type="text/css">
		h1{
			text-align: center;
			line-height: 1.5em;
		}
		.box{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            margin-top: 85px;
            margin-bottom: 5px; 
		}
		.rule{
			margin-top: 40px;
			margin-left: 55px;
			margin-right: 55px;
		}
		h6{
			text-align: center;
		}
		footer{
			margin-top: 131px;
			padding-top: 12px;
			padding-bottom: 1px;
			text-align: center;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
 
	    <a class="navbar-brand" href="#" style="color: white;"><b>Aplikasi Perpustakaan</b></a>
	 
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	 
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<div class="ml-auto">
	    		<a href="login.php" class="btn btn-outline-dark mr-3" style="color: white;">Login Admin</a>
	      		<a href="daftar.php" class="btn btn-outline-dark" style="color: white;">Daftar Admin</a>
	    	</div>
	   	</div> 
	</nav>

	<div class="content">
		<div class="container">
			<div class="box">
				<h1>Selamat Datang di <br> Aplikasi Perpustakaan</h1>
				<hr />
				<div class="rule">
					<h6>Aplikasi Perpustakaan adalah aplikasi yang digunakan untuk mengolah data perpustakaan.</h6><br>
					<p>Tentang Aplikasi Perpustakaan:</p>
					<ol>
						<li>Aplikasi ini hanya untuk admin perpustakaan.</li>
						<li>Hanya admin yang sudah terdaftar yang dapat login.</li>
						<li>Aplikasi ini dapat mengelola data buku, data anggota, dsb.</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer bg-info">
		<p style="color: white;"><b>Copyright &copy; Perpustakaan 2020</b></p>
	</footer>
</body>
</html>