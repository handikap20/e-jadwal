<?php 
include 'koneksi.php';
$udpate = mysqli_query($conn,"SELECT * FROM tb_siswa WHERE id_siswa = '$_GET[id]'");
$u = mysqli_fetch_array($udpate);
include 'header.php';
 ?>

	<p>
		<div class="container">	
			<p>

				<div class="row justify-content-center">	
					<form method="POST">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationDefault01">Username</label>
								<input type="text" class="form-control" id="validationDefault01"  name="username"  value="<?php echo $u['username'] ?>" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Password</label>
								<input type="password" class="form-control" id="validationDefault02"  name="password" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Nama Siswa</label>
								<input type="text" class="form-control" id="validationDefault02"  name="nama_siswa" value="<?php echo $u['nama_siswa'] ?>"required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">No HP</label>
								<input type="text" class="form-control" id="validationDefault02" name="nohp" value="<?php echo $u['nohp'] ?>" required>
							</div>

							<div class="col-md-6 mb-3">
								<label for="validationDefault02">NISN</label>
								<input type="text" class="form-control" id="validationDefault02"  name="nisn"  value="<?php echo $u['nisn'] ?>" required>
							</div>	
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Alamat</label>
								<input type="text" class="form-control" id="validationDefault02"  name="alamat" value="<?php echo $u['alamat'] ?>" required>
							</div>	
						</div>


						<button class="btn btn-primary" name="simpan" type="submit">Update</button>
					</form>
				</div>
			</p>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
	</html>
	<?php 
	include 'footer.php';
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
		$username  = $_POST['username'];
		$password = md5($_POST['password']);
		$nama_siswa = $_POST['nama_siswa'];
		$nohp = $_POST['nohp'];
		$nisn = $_POST['nisn'];
		$alamat = $_POST['alamat'];

		$simpan = mysqli_query($conn,"UPDATE tb_siswa SET username = '$username', password = '$password' ,nama_siswa = '$nama_siswa', nisn='$nisn',alamat = '$alamat' ,nohp = '$nohp' WHERE id_siswa = '$_GET[id]'");
		if($simpan){
			echo '<script language="javascript">alert("Data sukses tersimpan!")</script>';
			echo '<script language="javascript">window.location="siswa.php";</script>';   
		}else{
			echo '<script language="javascript">alert("Data gagal disimpan!")</script>';
			echo '<script language="javascript">window.location="siswa.php";</script>';
		}
	}
	?>