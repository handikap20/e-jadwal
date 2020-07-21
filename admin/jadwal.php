<?php include 'header.php'; ?>
	<p>
	<div class="container">	
		<p>
		<a type="button" class="btn btn-primary" href="addjadwal.php">Tambah Jadwal</a>
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
							<a type="button" href="editjadwal.php?id=<?php echo $s['id_jadwal'] ?>" class="btn btn-warning">Edit</a>
							<a type="button" href="deljadwal.php?id=<?php echo $s['id_jadwal'] ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php include 'footer.php'; ?>