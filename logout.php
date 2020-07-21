<?php
session_destroy();
echo '<script language="javascript">alert("Sukses Logout!")</script>';
echo '<script language="javascript">window.location="index.php";</script>';
exit();
?>