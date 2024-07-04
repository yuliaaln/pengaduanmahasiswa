<?php
session_start();
include '../koneksi.php';
$idd = $_GET ['id'];
$p = mysqli_query ($koneksi, "SELECT * FROM tanggapan WHERE isi_laporan = '$idd'");
$data = mysqli_fetch_array ($p);
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
    <title>Pengaduan Masyarakat</title>
</head>

<body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">ADUMAS<br>UIN SGD Bandung</a></h1>
      </div>
    </div>
  </header><!-- End Header -->

  <br><br><br><br>
  <div class="container">
    <!-- <div class="card"> -->
    <section class="row justify-content-center">
                <div class="form bglogins col-lg-10 form-login rounded-10 p-5 shadow-lg p-3 mb-5" style="background-color: #FAFAFA;">
      <H1 class="text-center mt-3 mb-5" style="color:#486797;font-family:monospace;">TANGGAPAN</H1>
      <!-- project  -->
    <div class="project_area">
<form method="post">
<div style="font-style:normal; font-family:Verdana, Geneva, sans-serif">
    <textarea rows="7" style="text-align: center; width:100%;">
        <?php
        if (isset($data['tanggapan'])) {
            echo htmlspecialchars($data['tanggapan'], ENT_QUOTES, 'UTF-8');
        } else {
            echo 'Belum di Tanggapi';
        }
        ?>
    </textarea>

</div>


</div>
</form>

   
    <!--/ project  -->
    <br><br><br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-left: 800px; margin-bottom:100px;">
      <a class="btn btn-secondary" href="riwayatlaporan.php" style="margin-right: 10px;">Kembali</a>
      </div>

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