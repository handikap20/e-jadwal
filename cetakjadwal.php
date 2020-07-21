<?php 
include 'koneksi.php';
session_start();
if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("Anda harus login dahulu!")</script>';
	echo '<script language="javascript">window.location="index.php";</script>';
}
$siswa = mysqli_query($conn,"SELECT tb_pilihan.*,tb_jadwal.*,tb_siswa.* FROM tb_jadwal,tb_pilihan,tb_siswa WHERE tb_pilihan.id_jadwal = tb_jadwal.id_jadwal AND tb_pilihan.id_siswa = tb_siswa.id_siswa AND tb_pilihan.id_siswa = $_SESSION[id_siswa]");
$u = mysqli_fetch_array($siswa);

?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Cetak</title>
</head>
<body><p>

	<div class="row">

		<div class="container">
			<h3>Laporan Jadwal Siswa</h3>
			<p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Kelas</th>
							<th scope="col">Mapel</th>
							<th scope="col">Guru</th>
							<th scope="col">Jam Pelajaran</th>
						</tr>
					</thead>
					<tbody>
						<?php 
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
							</tr>
						<?php } ?>
					</tbody>
				</table>		<!-- Optional JavaScript -->
			</div>
		</div>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
	</html>
	
	<script>
		window.print();
	</script>