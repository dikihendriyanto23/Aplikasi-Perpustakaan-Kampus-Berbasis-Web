<?php 
session_start();
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login Perpustakaan</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<style type="text/css">
		.card{
			margin: 60px;
			margin-right: 350px;
			margin-left: 350px;
			padding: 20px;
			border-radius: 3px;
			border-color: black;
		}
		h3{
			text-align: center;
		}
		#login{
			padding: 1em;
			margin: 2em auto;
		}
		button{
			float: right;
		}
		a{
			float: right;
			margin-right: 5px;
		}
		p{
			text-align: center;
		}
	</style>
</head>
<body class="bg-info">
	<div class="container" id="login">
		 <div class="card">
		 <?php 
			include 'alert.php';
		  ?>
		 <h3>Login Admin</h3>
		 <hr />
		 <br>
		 <form class="" action="proseslogin.php" method="post">
		 	<label for="username">Username :</label>
			<input type="text" name="username" class="form-control" placeholder="Username" value="">
			<label for="passsword">Password :</label>
		 	<input class="form-control" type="password" name="password" placeholder="Password" value="">
		 	<br>
		 	<div class="checkbox mb-3" id="remember">
		       <label>
			      <input type="checkbox" value="remember-me" name="remember"> Remember me
			   </label>
		    </div>
		 	<button class="btn btn-success" type="submit" name="button">Login</button>
		 	<a href="index.php" class="btn btn-primary" type="submit" name="button">Kembali</a>
		 	<br><br><br><hr />
		 	<p>Perpustakaan &copy; 2020</p>
		 </form>
		 </div>
	</div>
</body>
</html>