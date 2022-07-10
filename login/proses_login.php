<?php
//mengaktifkan session php
 session_start();
include '../Konfig/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($result);

if ($cek > 0){
    $data = mysqli_fetch_assoc($result);
   $_SESSION['username'] = $username;
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['status'] = "sudah_login";
    $_SESSION['jns_kel'] = $data['jns_kel'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['tgl_lahir'] = $data['tgl_lahir'];
    $_SESSION['id'] = $data['id'];
    header("location:../admin/dashboard_admin.php");

} else {
   echo mysqli_error($koneksi);
   header("location:login.php?pesan=gagal Login data tidak ditemukan.");
}