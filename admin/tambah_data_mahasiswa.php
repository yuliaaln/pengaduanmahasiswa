<?php
session_start();
include '../koneksi.php';
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
    <title>Tambah Mahasiswa</title>
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
  require '../koneksi.php';
  $nama = $_POST ['nama'];
  $nim = $_POST ['nim'];
  $jurusan = $_POST ['jurusan'];
  $alamat = $_POST ['alamat'];
  $tlp = $_POST ['tlp'];
  $username = $_POST ['username'];
  $password = $_POST ['password'];
  $tambah = mysqli_query ($koneksi, "INSERT INTO mahasiswa(nama,nim,jurusan,alamat,tlp,username,password)VALUES('$nama','$nim','$jurusan','$alamat','$tlp','$username','$password')");
  if($tambah){
    echo "<div class='alert alert-success'><center>Tambah data mahasiswa berhasil!</center></div>";
    echo "<meta http-equiv='refresh' content='1;url=datamahasiswa.php'>";
    } else {
    echo "<div class='alert alert-danger'><center>Tambah data mahasiswa gagal</center></div>";
    echo "<meta http-equiv='refresh' content='1;url=tambah_data_mahasiswa.php'>";
    }
    }
?>

</header><!-- End Header -->

  <br><br><br><br>
  <div class="container">
    <!-- <div class="card"> -->
    <section class="row justify-content-center">
                <div class="form bglogins col-lg-10 form-login rounded-10 p-5 shadow-lg p-3 mb-5" style="background-color: #FAFAFA;">
      <h1 class="text-center mt-3 mb-5" style="color:#486797;font-family:monospace;">TAMBAH MAHASISWA</h1>
      <form method="post">
            <table class="table ">
              <tr>
                <td><b>Nama</b></td>
                <td><input class="form-control" type="text" name="nama" style="background-color: white" required placeholder="Masukkan Nama"></td>
              </tr>

              <tr>
                <td><b>NIM</b></td>
                <td><input class="form-control" type="text" name="nim" required placeholder="Masukkan NIM" maxlength="10" onkeypress="return hanyaAngka(event)"></td>
              </tr>

              <tr>
                <td><b>Jurusan</b></td>
                <td><input class="form-control" type="text" name="jurusan" required placeholder="Masukkan Jurusan"></td>
              </tr>

              <tr>
                <td><b>Alamat</b></td>
                <td><input class="form-control" type="text" name="alamat" required placeholder="Masukkan Alamat"></td>
              </tr>

              <tr>
                <td><b>No Telepon<b></td>
                <td><input class="form-control" type="text" name="tlp"  maxlength="13" onkeypress="return hanyaAngka(event)" required placeholder="Masukkan No Telepon"></td>
              </tr>

              <tr>
                <td><b>Username</b></td>
                <td><input class="form-control" type="text" name="username" required placeholder="Masukkan Username"></td>
              </tr>

              <tr>
                <td><b>Password</b></td>
                <td><input class="form-control" type="text" name="password" required placeholder="Masukkan Password"></td>
              </tr>


</table>
              <button type="submit" class="btn btn-success" name="simpan"  style="border-radius: 20px; float:right;margin-right:10px;">Tambah</button>
              <a href="datamahasiswa.php" class="btn btn-secondary"  style="border-radius: 20px; float:right;margin-right:10px">Kembali</a><br><br>


                              </div>
                          </div>
                  </div>
            </div>
</form>
</div>
             </section>
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