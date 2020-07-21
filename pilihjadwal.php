<?php include 'header.php'; ?>
<p>
	<div class="container">	
		<p>
			<h1>Daftar Jadwal</h1>
			<div class="row justify-content-center">	
				<table class="table table-borderless">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Kelas</th>
							<th scope="col">Mapel</th>
							<th scope="col">Guru</th>
							<th scope="col">Jam Pelajaran</th>
							<th scope="col">Aksi</th>

						</tr>
					</thead>
					<tbody>
						<?php 
						include 'koneksi.php';
						$siswa = mysqli_query($conn,"SELECT * FROM tb_jadwal");
						while ($s = mysqli_fetch_array($siswa)) {
							$no = 1;
							?>
							<tr>
								<th scope="row"><?php echo $no++; ?></th>
								<td><?php echo $s['kelas']; ?></td>
								<td><?php echo $s['mapel'];?></td>
								<td><?php echo $s['guru'];?></td>
								<td><?php echo $s['jam'];?></td>
								<td>
									<form method="POST">
										<input type="hidden" name="id_siswa" value="<?php echo $_SESSION['id_siswa']?>">
										<input type="hidden" name="id_jadwal" value="<?php echo $s['id_jadwal']?>">
										<button type="submit" name="ambil" class="btn btn-warning">Ambil</button>
									</form>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="container">	
			<p>
				<h1>Daftar Pilihan</h1>
				<div class="row justify-content-center">	
					<table class="table table-borderless">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Kelas</th>
								<th scope="col">Mapel</th>
								<th scope="col">Guru</th>
								<th scope="col">Jam Pelajaran</th>
								<th scope="col">Aksi</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							include 'koneksi.php';
							$siswa = mysqli_query($conn,"SELECT tb_pilihan.*,tb_jadwal.*,tb_siswa.* FROM tb_jadwal,tb_pilihan,tb_siswa WHERE tb_pilihan.id_jadwal = tb_jadwal.id_jadwal AND tb_pilihan.id_siswa = tb_siswa.id_siswa AND tb_pilihan.id_siswa = $_SESSION[id_siswa]");
							while ($s = mysqli_fetch_array($siswa)) {
								$no = 1;
								?>
								<tr>
									<th scope="row"><?php echo $no++; ?></th>
									<td><?php echo $s['kelas']; ?></td>
									<td><?php echo $s['mapel'];?></td>
									<td><?php echo $s['guru'];?></td>
									<td><?php echo $s['jam'];?></td>
									<td>
										<a type="button" href="delpilihan.php?id=<?php echo $s['id_pilihan'] ?>" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php include 'footer.php'; 

			if (isset($_POST['ambil'])) {
				$id_siswa = $_POST['id_siswa'];
				$id_jadwal = $_POST['id_jadwal'];

				$simpan = mysqli_query($conn,"INSERT INTO tb_pilihan(id_pilihan,id_jadwal,id_siswa) VALUES(NULL,'$id_jadwal','$id_siswa')");
				if($simpan){
					echo '<script language="javascript">alert("Data sukses tersimpan!")</script>';
					echo '<script language="javascript">window.location="pilihjadwal.php";</script>';   
				}else{
					echo '<script language="javascript">alert("Data gagal disimpan!")</script>';
					echo '<script language="javascript">window.location="pilihjadwal.php";</script>';
				}

			}
			?>