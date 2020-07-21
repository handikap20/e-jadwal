<?php 

include 'header.php'; ?>
	<p>
		<div class="container">	
			<p>

				<div class="row justify-content-center">	
					<form method="POST">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationDefault01">Kelas</label>
								<input type="text" class="form-control" id="validationDefault01"  name="kelas" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Mapel</label>
								<input type="text" class="form-control" id="validationDefault02"  name="mapel" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Guru</label>
								<input type="text" class="form-control" id="validationDefault02"  name="guru" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Jadwal</label>
								<input type="text" class="form-control" id="validationDefault02" name="jam" required>
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
		$kelas  = $_POST['kelas'];
		$mapel = $_POST['mapel'];
		$guru = $_POST['guru'];
		$jam = $_POST['jam'];

		$simpan = mysqli_query($conn,"INSERT INTO tb_jadwal(id_jadwal,kelas,mapel,guru,jam) VALUES(NULL,'$kelas','$mapel','$guru','$jam')");
		if($simpan){
			echo '<script language="javascript">alert("Data sukses tersimpan!")</script>';
			echo '<script language="javascript">window.location="jadwal.php";</script>';   
		}else{
			echo '<script language="javascript">alert("Data gagal disimpan!")</script>';
			echo '<script language="javascript">window.location="jadwal.php";</script>';
		}
	}
	?>