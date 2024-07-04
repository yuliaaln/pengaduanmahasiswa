<?php
session_start();
error_reporting(0);
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
    <title>Data Mahasiswa</title>
</head>

<body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">ADUMAS<br>UIN SDG BANDUNG</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <ul>
          <li><a class="nav-link scrollto" href="../admin/index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../admin/kelolalaporan.php">Pengaduan Mahasiswa</a></li>
          <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="datapetugas.php">Petugas</a></li>
              <li><a href="datamahasiswa.php">Mahasiswa</a></li>
            </ul>
          </li>
          <li><a class="getstarted nav-link scrollto" href="../logout.php"onclick="return confirm('Yakin ingin Log Out?')">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

  <div class="container">
            <div class="row">
            <div class="col-md-12 mt-3">
                    <div class="card">
                    <div class="card-header">
                            <h4>DATA MAHASISWA</h4>
                        </div>
                       
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead class="table-dark">
    
    <td>No</td>
    <td>Nama</td>
    <td>NIM</td>
    <td>Jurusan</td>
    <td>Alamat</td>
    <td>No Telepon</td>
    <td>Username</td>
    <td>Password</td>
    <td>Opsi</td>
</thead>

<?php
$no = 1;
$query = mysqli_query ($koneksi, "SELECT * FROM mahasiswa");
if (mysqli_num_rows ($query)){
while ($data = mysqli_fetch_array ($query)){
?>
<td><?php echo $no++ ?></td>
<td><?php echo $data['nama'] ?></td>
<td><?php echo $data['nim'] ?></td>
<td><?php echo $data['jurusan'] ?></td>
<td><?php echo $data['alamat'] ?></td>
<td><?php echo $data['tlp'] ?></td>
<td><?php echo $data['username'] ?></td>
<td><?php echo $data['password'] ?></td>
<td>
<a onClick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-outline-danger" href="hapus_user_mahasiswa.php?idd=<?php echo $data['nim'] ?>" role="button"><i class="fa fa-trash"></i></a>
</td>
</form>
</td>
</tr>
<?php }}else{
	echo '<tr><td colspan="8" align="center">TIDAK ADA DATA!!!</td></tr>';
}?>

            </table>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- End Hero -->
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