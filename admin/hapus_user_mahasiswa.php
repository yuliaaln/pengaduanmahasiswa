<?php
include '../koneksi.php';
$id = $_GET['idd'];
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$id'");
header ("location: datamahasiswa.php");
?>