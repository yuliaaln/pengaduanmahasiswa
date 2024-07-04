<?php
session_start();
include 'koneksi.php';

if (isset($_POST['simpan'])){
	$nim = $_POST ['nim'];
	$nama = $_POST ['nama'];
  $jurusan = $_POST ['jurusan'];
	$alamat = $_POST ['alamat'];
	$username = $_POST ['username'];
	$password = $_POST ['password'];
  $tlp = $_POST ['tlp'];
	$tambah = mysqli_query ($koneksi, "INSERT INTO mahasiswa(nim,nama,jurusan,alamat,tlp,username,password)VALUES('$nim','$nama','$jurusan','$alamat','$tlp','$username','$password')");
	if($tambah){
    echo "
    <script>
    alert('Registrasi berhasil');
    document.location.href = 'login.php';
    </script>
    ";
  }else {
    echo "
    <script>
    alert('Registrasi gagal');
    document.location.href = 'registrasi.php';
    </script>
    ";
  }
}
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
    <title>Registrasi</title>
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
    <h1><a href="#">ADUMAS<br>UIN SGD BANDUNG</a></h1>
      </div>
    </div>
  </header><!-- End Header -->
        <br>
        <br>
        <br>
        <section class="container-fluid mb-7">
            <section class="row justify-content-center">
                <div class="form bglogins col-lg-5 form-login rounded-10 p-5 shadow-lg p-2 mb-2" style="background-color: #FAFAFA;">
                    <h4 class="text-center font-weight-bold">REGISTRASI</h4><br>
                    <form class="user" method="post">
           
            <div class="form-group">
                <b><label for="nik">NIM</label></b>
                <input type="text" class="form-control" style= "border-radius: 10px;" id="nim" name="nim" placeholder="Masukkan NIM" minlength="10" maxlength="10" onkeypress="return hanyaAngka(event)" required>
            </div>
            <div class="form-group">
                <b><label for="name">Nama</label></b>
                <input type="text" class="form-control" style= "border-radius: 10px;" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <b><label for="name">Jurusan</label></b>
                <input type="text" class="form-control" style= "border-radius: 10px;" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan" required>
            </div>
            <div class="form-group">
                <b><label for="name">Alamat</label></b>
                <input type="text" class="form-control" style= "border-radius: 10px;" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            </div>
            <div class="form-group">
                <b><label for="InputUsername">Username</label></b>
                <input type="text" class="form-control" style= "border-radius: 10px;" id="InputUsername" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group">
                <b><label for="InputPassword">Password</label></b>
                <input type="password" class="form-control" style= "border-radius: 10px;" id="InputPassword" name="password" placeholder="Masukkan Password" required>
            </div>
            <div class="form-group">
                <b><label for="level">No. Telepon</label></b>
                <input type="text" class="form-control" style= "border-radius: 10px;" id="tlp" name="tlp" placeholder="Masukkan No. Telepon" maxlength="13" onkeypress="return hanyaAngka(event)" required>
            </div>
                <div class="form-group">
                    <input type="hidden"  name="id_role" value="3">
                </div>
                <br>
                <div>
                <button type="submit" name="simpan" class="btn btn-success" style="float:right; border-radius: 20px" tabindex="-1" role="button" aria-disabled="true">Daftar</button>
                <a class="btn btn-secondary" href="index.php" role="button" style="float:right; border-radius: 20px; margin-right: 3%">Kembali <i  style="color:white"></i></a>
                </div>
                <br><br><br>
                <center>
                <div class="form-footer mt-2">
                    <p> Sudah punya akun? <a href="login.php">Masuk</a></p>
                </div>
                    </center>
            </div>
            </div>
                </section>
            </section>
        </form>
        </div>
        <br>
         <!-- ======= Footer ======= -->
 <footer id="footer">
<div class="footer-newsletter">
  <div class="container">
      <div class="col-lg-2">
    </div>
  </div>
</div>

    <div class="container py-3">
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