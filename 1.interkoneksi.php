<html>
<head>
<title>Koneksi Database Mysql</title>
</head>
<body>
   <h1>Demo Koneksi Databese Mysql</h1>
    <?php //membuat koneksi
    $con= mysqli_connect("localhost","root","","mydb");

    //cek koneksi
    if(mysqli_connect_error()){ //jika eror tampilkan
        echo "failed to connect to Mysql: " . mysqli_connect_error();
        exit();
    }
    ?>
</body>
</html>