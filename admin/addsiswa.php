<?php 

include 'header.php'; ?>
	<p>
		<div class="container">	
			<p>

				<div class="row justify-content-center">	
					<form method="POST">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationDefault01">Username</label>
								<input type="text" class="form-control" id="validationDefault01"  name="username" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Password</label>
								<input type="password" class="form-control" id="validationDefault02"  name="password" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Nama Siswa</label>
								<input type="text" class="form-control" id="validationDefault02"  name="nama_siswa" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">No HP</label>
								<input type="text" class="form-control" id="validationDefault02" name="nohp" required>
							</div>

							<div class="col-md-6 mb-3">
								<label for="validationDefault02">NISN</label>
								<input type="text" class="form-control" id="validationDefault02"  name="nisn" required>
							</div>	
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Alamat</label>
								<input type="text" class="form-control" id="validationDefault02"  name="alamat" required>
							</div>	
						</div>


						<button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
					</form>
				</div>
			</p>
		</div>

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

		$simpan = mysqli_query($conn,"INSERT INTO tb_siswa(id_siswa,username,password,nama_siswa,nisn,alamat,nohp) VALUES(NULL,'$username','$password','$nama_siswa','$nohp','$nisn','$alamat')");
		if($simpan){
			echo '<script language="javascript">alert("Data sukses tersimpan!")</script>';
			echo '<script language="javascript">window.location="siswa.php";</script>';   
		}else{
			echo '<script language="javascript">alert("Data gagal disimpan!")</script>';
			echo '<script language="javascript">window.location="siswa.php";</script>';
		}
	}
	?>