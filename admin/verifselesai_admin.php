<?php 
include '../koneksi.php';
$idd = $_GET ['id'];
$p = mysqli_query ($koneksi, "SELECT * FROM aduan WHERE id_pengaduan = '$idd'");
$data = mysqli_fetch_array ($p);
?>
<?php
if (isset($_POST['simpan'])){
	$id = $_POST ['id'];
	$tgl = $_POST ['tgl'];
	$nama = $_POST ['nama'];
	$nim = $_POST ['nim'];
	$isi = $_POST ['isi'];
	$tlp = $_POST ['tlp'];
	$foto = $_POST ['foto'];
	$st = $_POST ['status'];
	$edit = mysqli_query ($koneksi, "UPDATE aduan SET id_pengaduan='$id',tgl_pengaduan='$tgl',nama_pengadu='$nama',nim='$nim',isi_laporan='$isi',tlp='$tlp',foto='$foto',status='$st' WHERE id_pengaduan ='$idd'");
	if($edit){
		?>
        <script type="text/javascript">
		document.location.href="kelolalaporan.php";
		</script>
        <?php
		}else{
		?>
        <script type="text/javascript">
		document.location.href="kelolalaporan.php";
		</script>
        <?php
		}
		}