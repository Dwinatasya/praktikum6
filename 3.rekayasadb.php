<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password,$dbname);

//cek koneksi
if(!$conn){ //jika bukan tampilkan coneksi gagal dan error
    die("connection failed: " . mysqli_connect_error());
}
//memasukan data
$sql = "INSERT INTO liga (kode, negara, champion) 
VALUES ('Jer', 'Jerman', '4')";
$sql = "INSERT INTO liga (kode, negara, champion) 
VALUES ('Spa', 'Spanyol', '3')";

if(mysqli_query($conn,$sql)){ //jika query berhasil tampilkan sukses
    echo "Inser data successfully";
}else{ //atau gagal tampilkan error
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);//mysql keluar
?>