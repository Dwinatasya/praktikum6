<html>
<head>
	<title>Edit Data Pegawai</title>
</head>
<body>
 
    <h2>Selamat Datang </h2>
    <!--membuat link-->
	<a href="6.index.php">MENU</a>
	<br/>
	<br/>
    <h3>Mengubah Data Pegawai</h3>
	<?php
	include '6.koneksi.php';//koneksi
	$id = $_GET['id'];
	$data = mysqli_query($con,"SELECT * FROM tb_pegawai WHERE id='$id'"); //mengirim printah ke mysql
	while($d = mysqli_fetch_array($data)){// menangkap data
		?><!--membuat tabel data pegawai dalam form-->
		<form method="post" action="6.update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td><!--menyimpan data yang di edit-->
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>No. Telpun</td>
					<td><input type="text" name="notelp" value="<?php echo $d['notelp']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
                <tr>
					<td>Departemen</td>
					<td><input type="text" name="departemen" value="<?php echo $d['departemen']; ?>"></td>
				</tr>
				<tr>
					<td></td><!--membuat button ubah-->
					<td><input type="submit" value="UBAH"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>
