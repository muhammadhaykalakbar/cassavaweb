<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['username_id'];
$email = $_POST['email'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into singkong values('$id','$email','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>