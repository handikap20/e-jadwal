<?php 
include 'koneksi.php';
$delete = mysqli_query($conn,"DELETE FROM tb_jadwal WHERE id_jadwal = '$_GET[id]'");
if($delete) {
    echo '<script language="javascript">alert("Berhasil delete!")</script>';     
    echo '<script language="javascript">window.location="jadwal.php";</script>';
} else {
    echo '<script language="javascript">alert("Gagal delete!")</script>';     
    echo '<script language="javascript">window.location="jadwal.php";</script>';
}
 ?>