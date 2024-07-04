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
          <li><a class="nav-link scrollto" href="../admin/index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="../admin/kelolalaporan.php">Pengaduan Mahasiswa</a></li>
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
                            <h4>DATA PENGADUAN</h4>
                        </div>

                        <a class="btn btn-dark mt-4" style="margin-left: 950px; margin-bottom:15px; margin-right: 60px; border-radius: 8px" href="laporanmahasiswa.php" role="button"><i class="fa fa-print"></i> Cetak</a>

                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead class="table-dark">
  <?php
    include "../koneksi.php";
    
    $result = mysqli_query ($koneksi, "SELECT * FROM aduan ORDER BY tgl_pengaduan DESC");
    
    ?>
    
    <td>No</td>
    <td>Tanggal Pengaduan</td>
    <td>Nama</td>
    <td>NIM</td>
    <td>Isi Laporan</td>
    <td>Telp</td>
    <td>Foto</td>
    <td>Status</td>
    <td>Opsi</td>
    <td>Tanggapan</td>
 
</thead>

  <?php $x=1; ?>
   <?php while($data=mysqli_fetch_assoc($result)): ?>
  <tbody>
   
      <td><?= $x; ?></td>
      <td><?= $data["tgl_pengaduan"]; ?></td>
      <td><?= $data["nama_pengadu"]; ?></td>  
      <td><?= $data["nim"]; ?></td>
      <td><?= $data["isi_laporan"]; ?></td>
      <td><?= $data["tlp"]; ?></td>
      <td><a href="htttp://localhost/../img2/<?php echo $data["foto"];?>"><img src="../img2/<?php echo $data["foto"];?>" height="55px"></a></td>
      <td><?= $data["status"]; ?></td>

<form method="post" action="verifselesai_admin.php?id=<?php echo $data['id_pengaduan'] ?>">
<input type="hidden" name="id" class="form_input2" value="<?php echo $data['id_pengaduan']?>">
<input type="hidden" name="tgl" class="form_input2" value="<?php echo $data['tgl_pengaduan']?>">
<input type="hidden" name="nama" class="form_input2" value="<?php echo $data['nama_pengadu']?>"></td>
<input type="hidden" name="nim" class="form_input2" value="<?php echo $data['nim']?>">
<input type="hidden" name="isi" class="form_input2" value="<?php echo $data['isi_laporan']?>">
<input type="hidden" name="tlp" class="form_input2" value="<?php echo $data['tlp']?>">
<input type="hidden" name="foto" class="form_input2" value="<?php echo $data['foto']?>">
<input type="hidden" name="status" class="form_input2" value="Selesai">

<td><button type="submit" class="btn btn-primary" name="simpan"><i class="fa fa-check-square"></i></button>
<a onClick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-dark mt-2" href="hapuspengaduan.php?idd=<?php echo $data['id_pengaduan'] ?>" role="button"><i class="fa fa-trash"></i></a>
<td>
 <a class="btn btn-outline-info btn-sm" href="tanggapi.php?id=<?php echo $data['id_pengaduan'] ?>"><i class="fas fa-edit"></i><span class="ml-1">Tanggapi</span></a>
  <a class="btn btn-outline-success btn-sm mt-2" href="cektanggapan.php?id=<?php echo $data['isi_laporan'] ?>"><i class="fa fa-eye"></i><span class="ml-1">Lihat Tanggapan</span></a>
</td>
	</div>
</div>
</form></td>
</tr>
</tbody> 
   <?php $x++; ?> 
   <?php endwhile; ?> 
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