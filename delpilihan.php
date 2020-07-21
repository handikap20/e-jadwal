<?php 
include 'koneksi.php';
$delete = mysqli_query($conn,"DELETE FROM tb_pilihan WHERE id_pilihan = '$_GET[id]'");
if($delete) {
    echo '<script language="javascript">alert("Berhasil delete!")</script>';     
    echo '<script language="javascript">window.location="pilihjadwal.php";</script>';
} else {
    echo '<script language="javascript">alert("Gagal delete!")</script>';     
    echo '<script language="javascript">window.location="pilihjadwal.php";</script>';
}
 ?>