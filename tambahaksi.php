<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];

// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nim','$nama','$alamat','$kelamin')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>