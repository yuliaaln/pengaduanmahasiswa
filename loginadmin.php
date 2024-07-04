<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
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
    <title>Login</title>
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
          <li><a class="getstarted nav-link scrollto" href="index.php">Back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <div class="container">
            
            <section class="container-fluid mb-7">
             <section class="row justify-content-center">
                 <div class="form bglogins col-lg-5 form-login rounded-10 p-5 shadow-lg p-3 mb-5" style="background-color: #FAFAFA;">
                 <div class="d-flex flex-row">
 
                     <img src="img/logo-uin.png" alt="" height="60" width="70" style="margin-right: 10px;">
                     <h5 class="fw-bold mb-4 text-uppercase" style="color: #75A47F">Pengaduan Mahasiswa Online</h5>
                 </div>
 <h5 class="text-center font-weight-bold"> Masuk Sebagai Admin</h5>
                     <form class="user" method="post" action="cek_login_ap.php">
         <div class="form-group">
             <label for="username">Username</label>
             <input type="text" class="form-control" id="username" style= "border-radius: 10px;" name="username" placeholder="Masukkan Username">
         </div>
         <div class="form-group">
             <label for="InputPassword">Password</label>
             <input type="password" class="form-control" id="InputPassword" style= "border-radius: 10px;" name="password" placeholder="Masukan Password">
         </div><br>


        <center>
        <button type="submit" name="submit" class="btn btn-block btn-success me-md-1" style= "text-decoration: none; border-radius: 20px; width: 180px;">Login</button>
          </center>
        
</section>
</section>
</div>
</form>
    </div>
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
    &copy;<strong><span>Pengaduan Mahasiswa Online</span></strong>. UIN SGD Bandunng
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