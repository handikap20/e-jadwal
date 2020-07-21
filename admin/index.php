<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Login</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<a class="navbar-brand" href="#">E-Jadwal</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<p>
		<div class="container">	
			<div class="row-row justify-content-center">	
				<div class="col-md-12 mb-12">
					<form method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1">
						</div>
						<button type="submit" name="login" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</p>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
	</html>
	<?php 
	include 'koneksi.php';
	if(isset($_POST['login'])){
		session_start();
		$username  = $_POST['username'];
		$password = md5($_POST['password']);

		$sqllogin = mysqli_query($conn,"SELECT * FROM tb_admin WHERE username ='$username' AND password = '$password'");
		$row = mysqli_fetch_assoc($sqllogin);
		$username = $row['username'];
		$nama_siswa	 = $row['nama_siswa'];
		if(mysqli_num_rows($sqllogin) == 1) {
			if($sqllogin){
				$_SESSION['username'] = $username;
				echo '<script language="javascript">alert("Login Berhasil!")</script>';
				echo '<script language="javascript">window.location="home.php";</script>';
			} 
		}else {
			echo '<script language="javascript">alert("Gagal Login!")</script>';
			echo '<script language="javascript">window.location="index.php";</script>';
		}
	}
	?>

