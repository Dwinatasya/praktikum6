<?php
$servername = "localhost";
$username = "root";
$password = "";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

//cek koneksi
if(!$conn){ //jika bukan tampilkan coneksi gagal dan error
    die("connection failed: " . mysqli_connect_error());
}
//buat database
$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn,$sql)){ //jika query berhasil tampilkan sukses
    echo "database created successfully";
}else{ //atau gagal tampilkan error
    echo "error crating database: " . mysqli_error($conn);
}
mysqli_close($conn);//menghentikan koneksi ke mysqli
?>