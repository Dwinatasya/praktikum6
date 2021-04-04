<?php 
// koneksi database
include '6.koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($con,"DELETE FROM tb_pegawai WHERE id='$id'");
 
// mengalihkan halaman kembali ke 6.index.php
header("location: 6.index.php");
?>


.