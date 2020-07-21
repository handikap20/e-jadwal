<?php 
include 'koneksi.php';
$udpate = mysqli_query($conn,"SELECT * FROM tb_jadwal WHERE id_jadwal = '$_GET[id]'");
$u = mysqli_fetch_array($udpate);
include 'header.php';
?>

		<div class="container">	
			<p>

				<div class="row justify-content-center">	
					<form method="POST">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationDefault01">Kelas</label>
								<input type="text" class="form-control" id="validationDefault01"  name="kelas" value="<?php echo $u['kelas']; ?>" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Mapel</label>
								<input type="text" class="form-control" id="validationDefault02"  name="mapel" value="<?php echo $u['mapel']; ?>" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Guru</label>
								<input type="text" class="form-control" id="validationDefault02"  name="guru" value="<?php echo $u['guru']; ?>" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Jadwal</label>
								<input type="text" class="form-control" id="validationDefault02" name="jam" value="<?php echo $u['jam']; ?>"required>
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
		$kelas  = $_POST['kelas'];
		$mapel = $_POST['mapel'];
		$guru = $_POST['guru'];
		$jam = $_POST['jam'];


		$simpan = mysqli_query($conn,"UPDATE tb_jadwal SET kelas = '$kelas', mapel = '$mapel' ,guru = '$guru', jam='$jam' WHERE id_jadwal = '$_GET[id]'");
		if($simpan){
			echo '<script language="javascript">alert("Data sukses tersimpan!")</script>';
			echo '<script language="javascript">window.location="jadwal.php";</script>';   
		}else{
			echo '<script language="javascript">alert("Data gagal disimpan!")</script>';
			echo '<script language="javascript">window.location="jadwal.php";</script>';
		}
	}
	?>