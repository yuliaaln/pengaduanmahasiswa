<?php
 session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username ='$username' AND password ='$password'");
$cek = mysqli_fetch_array($login);
var_dump($username);
if ($cek > 0){
$_SESSION['username'] = $cek['username'];
$_SESSION['password'] = $cek['password'];
$_SESSION['nama_petugas'] = $cek['nama_petugas'];
$_SESSION['level'] = $cek['level'];
$_SESSION['tlp'] = $cek['tlp'];

header('location:admin_petugas.php'); 


  echo "<div class='alert alert-success' style='margin-top:11px'>Login Sukses</div>";
  echo "<meta http-equiv='refresh' content='1;url=admin_petugas.php'>";
  } else {
  echo "<div class='alert alert-danger' style='margin-top:11px'>Login Gagal</div>";
  echo "<meta http-equiv='refresh' content='1;url=login.php'>";

} 
  

?>