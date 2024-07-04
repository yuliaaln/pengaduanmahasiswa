<?php
include '../koneksi.php';
$id = $_GET ['idd'];
mysqli_query ($koneksi, "DELETE FROM petugas WHERE id_petugas ='$id'");
header ("location: datapetugas.php");
?>