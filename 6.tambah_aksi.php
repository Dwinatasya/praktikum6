<?php 
// koneksi database
include '6.koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$departemen = $_POST['departemen'];
 
// menginput data ke database
mysqli_query($con,"INSERT INTO tb_pegawai values('','$nama','$notelp','$alamat', '$departemen')");

// mengalihkan halaman kembali ke 6.index.php
header("location: 6.index.php");
?>

