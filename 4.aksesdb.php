<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password,$dbname);

//cek koneksi
if(!$conn){ //jika bukan tampilkan coneksi gagal dan error
    die("connection failed: " . mysqli_connect_error());
}
//memasukan data
$sql = "SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){ 
    //output data 
    while($row = mysqli_fetch_assoc($result)){
        echo "Kode: " . $row["kode"] . "-Negara: ".$row["negara"] . "" . 
        $row["champion"]. "<br>";
    }
}else{ 
    echo "0 result";
}
mysqli_close($conn);//mysql keluar
?>