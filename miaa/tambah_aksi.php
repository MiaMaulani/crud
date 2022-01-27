<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['alamat'];
$alamat = $_POST['nip'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$alamat','$nip')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>