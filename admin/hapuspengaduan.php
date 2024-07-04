<?php
include '../koneksi.php';
$id = $_GET ['idd'];
mysqli_query ($koneksi, "DELETE FROM aduan WHERE id_pengaduan ='$id'");
header ("location: kelolalaporan.php");
?>