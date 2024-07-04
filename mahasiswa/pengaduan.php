<?php
session_start();
include '../koneksi.php';
if(!isset ($_SESSION['nama'])){
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
    <title>Pengaduan Mahasiswa</title>
</head>

<body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <h1><a href="#">ADUMAS<br>UIN SGD BANDUNG</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <ul>
          <li><a class="nav-link scrollto" href="../mahasiswa/riwayatlaporan.php">Pengaduan Saya</a></li>
          <li><a class="getstarted nav-link scrollto" href="../logout.php"onclick="return confirm('Yakin ingin Log Out?')">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
    <?php
if (isset($_POST['simpan'])){
	$id = $_POST ['id'];
	$tgl = $_POST ['tgl'];
	$nama = $_POST ['nama'];
	$nim = $_POST ['nim'];
	$laporan = $_POST ['laporan'];
	$tlp = $_POST ['tlp'];
	$gambar = $_POST ['gambar'];
	$st = $_POST ['st'];
	$tambah = mysqli_query ($koneksi, "INSERT INTO aduan(id_pengaduan,tgl_pengaduan,nama_pengadu,nim,isi_laporan,tlp,foto,status)VALUES('$id','$tgl','$nama','$nim','$laporan','$tlp','$gambar','$st')");
	if($tambah){
		echo "<div class='alert alert-success'><center>Pengaduan Berhasil</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=riwayatlaporan.php'>";
		} else {
		echo "<div class='alert alert-danger'><center>Pengaduan Gagal</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=pengaduan.php'>";
		}
		}
?>
  </header><!-- End Header -->

  <br><br><br><br>
  <div class="container">
    <!-- <div class="card"> -->
    <section class="row justify-content-center">
                <div class="form bglogins col-lg-10 form-login rounded-10 p-5 shadow-lg p-3 mb-5" style="background-color: #FAFAFA;">
      <H1 class="text-center mt-3 mb-5" style="color:#486797;font-family:monospace;">Form Pengaduan</H1>

        <div class="row">
          <table class="table">
<form method="post">
<input type="hidden" name="id" class="form_input2">
<tr>
<td><b>TANGGAL PENGADUAN</b></td>
<td><input class="form-control" type="text" name="tgl" style="background-color: white;" required value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d (H:i:s)') ?>" readonly></td>
</tr>
<tr>
<td><b>NAMA</b></td>
<td><input class="form-control" type="text" name="nama" style="background-color: white;" required value="<?php echo $_SESSION['nama']?>" readonly></td>
</tr>
<tr>
<td><b>NIM</b></td>
<td><input class="form-control" type="text" name="nim" style="background-color: white;" required value="<?php echo $_SESSION['nim']?>" readonly></td>
</tr>
<tr>
<td><b>ISI LAPORAN</b></td>
  <td><textarea class="form-control" name="laporan" style="background-color: white;" cols="80" required rows="8"></textarea></td>
</tr>
<tr>
<td><b>NO TELEPON</b></td>
<td><input class="form-control" type="text" name="tlp" style="background-color: white;" value="<?php echo $_SESSION['tlp']?>" readonly></td>
</tr>
<tr>
<td><b>FOTO</b></td>
<td><input class="form-control" type="file" required name="gambar"></td>
</tr>
<tr>
<input type="hidden" name="st" value="Proses">
</tr>
  
<form>
</table>
    </div>
    <br><br><br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-left: 800px; margin-bottom:100px;">
        <a class="btn btn-secondary" style="border-radius: 20px;" href="../mahasiswa/index.php" role="button" style="margin-right: 10px;">Kembali</a>
        <input class="btn btn-success" style="border-radius: 20px;" type="submit" name="simpan" value="Kirim">
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