<?php 
include 'header.php';
?>
<p>
	<div class="container">	
		<p>
			<a type="button" class="btn btn-primary" href="addsiswa.php">Tambah Data</a>
			<div class="row justify-content-center">	
				<table class="table table-borderless">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama Siswa</th>
							<th scope="col">NISN</th>
							<th scope="col">Alamat</th>
							<th scope="col">NO HP</th>
							<th scope="col">Aksi</th>

						</tr>
					</thead>
					<tbody>
						<?php 
						include 'koneksi.php';
						$siswa = mysqli_query($conn,"SELECT * FROM tb_siswa");
						while ($s = mysqli_fetch_array($siswa)) {
							$no = 1;
							?>
							<tr>
								<th scope="row"><?php echo $no++; ?></th>
								<td><?php echo $s['nama_siswa']; ?></td>
								<td><?php echo $s['nisn'];?></td>
								<td><?php echo $s['alamat'];?></td>
								<td><?php echo $s['nohp'];?></td>
								<td>
									<a type="button" href="editsiswa.php?id=<?php echo $s['id_siswa'] ?>" class="btn btn-warning">Edit</a>
									<a type="button" href="delsiswa.php?id=<?php echo $s['id_siswa'] ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php 

		include 'footer.php'; ?>