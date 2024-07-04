<?php
session_start();
include '../koneksi.php';
$idd = $_GET ['id'];
$p = mysqli_query ($koneksi, "SELECT * FROM aduan WHERE id_pengaduan = '$idd'");
$data = mysqli_fetch_array ($p);
if(!isset ($_SESSION['nama_petugas'])){
	header ("location: index.php");
	}else{
?>
<!Doctype html>
<html lang="en">
<head>

    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="body.css">
    <link href="asset/css/bootstrap.min.css">
    <link class="icon" href="#" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Tanggapi</title>
</head>

<body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">ADUMAS<br>UIN SGD BANDUNG</a></h1>
      </div>

    </div>

    <?php
if (isset($_POST['simpan'])){
	$id = $_POST ['id'];
	$idp = $_POST ['idp'];
	$tgl = $_POST ['tgl'];
	$isi = $_POST ['isi'];
	$tanggapan = $_POST ['tanggapan'];
	$adm = $_POST ['adm'];
	$tambah = mysqli_query ($koneksi, "INSERT INTO tanggapan(id_tanggapan,id_pengaduan,tgl_tanggapan,isi_laporan,tanggapan,id_petugas)VALUES('$id','$idp','$tgl','$isi','$tanggapan','$adm')");
	if($tambah){
		echo "<div class='alert alert-success'><center>Berhasil Ditanggapi</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=kelolalaporan.php'>";
		} else {
		echo "<div class='alert alert-danger'><center>Tanggapan Gagal</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=tanggapi.php'>";
		}
		}
?>
  </header><!-- End Header -->

  <br><br><br><br>
  <div class="container">
    <!-- <div class="card"> -->
    <section class="row justify-content-center">
                <div class="form bglogins col-lg-10 form-login rounded-10 p-5 shadow-lg p-3 mb-5" style="background-color: #FAFAFA;">
      <h1 class="text-center mt-3 mb-5" style="color:#486797;font-family:monospace;">FORM TANGGAPAN</h1>
        <div class="row">
          <table class="table">
          <form method="post">
<input type="hidden" name="id" class="form_input2">
<input type="hidden" name="idp" value="<?= $data ['id_pengaduan']?>" class="form_input2">
<tr>
<td><b>TANGGAL PENGADUAN</b></td>
<td><input class="form-control" type="text" name="tgl" style="background-color: white;" required value="<?php echo $data['tgl_pengaduan']?>" readonly></td>
</tr>
<tr> 
<td><b>Nama</b></td>
  <td><input class="form-control" type="text" name="nama" style="background-color: white;" required  value="<?php echo $data['nama_pengadu']?>" readonly></td>
</tr>
<td><b>Isi Laporan</b></td>
  <td><input class="form-control" type="text" name="isi" style="background-color: white;" required  value="<?php echo $data['isi_laporan']?>" readonly></td>
</tr>
<td><b>Foto</b></td>
  <td><input class="form-control" type="image" name="foto" style="background-color: white;" required  value="<?php echo $data['foto']?>" readonly></td>
</tr>
<input type="hidden" name="isi" class="form_input2" required value="<?= $data ['isi_laporan']?>"></td>
<tr>
<td><b>TANGGAPAN</b></td>
  <td><textarea class="form-control" name="tanggapan" style="background-color: white;" cols="80" required rows="8" placeholder="Isi Tanggapan"></textarea></td>
</tr>
<tr>
<td><input type="hidden" name="adm" value="1"></td>
</tr>
  
<form>
</table>
    </div>
    <br><br><br>
      <div class="d-grid gap-3 d-md-flex justify-content-md-end" style="margin-left: 700px; margin-bottom:80px;">
      <a class="btn btn-secondary" href="kelolalaporan.php" role="button" style= "border-radius: 20px; float:right; margin-right: 1%">Kembali <i  style="color:white"></i></a>
        <input class="btn btn-success"  style="border-radius: 20px;" type="submit" name="simpan" value="Kirim">
      </div>

    </div>
  </div>



  </div>
  </div>

  </div>
  </div>
         <!-- ======= Footer ======= -->
  <footer id="footer">
<div class="footer-newsletter">
  <div class="container">
      <div class="col-lg-2">
    </div>
  </div>
</div>
        <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>More to Explore</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About US</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
      <div class="copyright">
    &copy;<strong><span>Pengaduan Mahasiswa Online</span></strong>. UIN SGD Bandung
  </div>
  </footer><!-- End Footer -->

        <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>
</html>
<?php } ?>