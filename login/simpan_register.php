<?php
session_start();

include "../config/koneksi.php";
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$jns_kel = $_POST['jns_kel'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$status = $_POST['status']

//$count= count(array)

$insert_data = mysqli_query($koneksi,"INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`, `jns_kel`, `tgl_lahir`, `email`, `status`) VALUES (NULL, '$nama_lengkap', '$username', '$password', '$jns_kel', '$tgl_lahir', '$email', '$status');
 if ($insert_data) {
 	header('location:dashboard.php?pesan=Data Berhasil Di Simpan');
 } else {
echo mysqli_error($koneksi);
 	//header('location:dashboard.php?pesan=Data Gagal Di Simpan');
 }
