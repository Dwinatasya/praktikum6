<?php //membuat koneksi
    $con= mysqli_connect("localhost","root","");
    mysqli_select_db($con,"mydb"); //mengambil data dari database
    //cek koneksi
    if(mysqli_connect_error()){ //jika eror tampilkan
        echo "failed to connect to Mysql: " . mysqli_connect_error();
       exit();
    }
?>