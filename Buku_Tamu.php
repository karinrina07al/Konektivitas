<!DOCTYPE html>
<html>
<head>
	<title>Simpan Buku Tamu</title>
</head>
<body>
	<h1>Simpan Buku Tamu MYSQL</h1>
	<?php 
		$nama =$_POST["nama"];
		$email =$_POST["email"];
		$conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
		mysqli_select_db("daftartamu",$conn);
		echo "Nama : $nama<br>";
		echo "email : $email<br>";
		$sqlstr="insert into bukutamu (nama,email) values ('$nama','$email')";
		$hasil = mysqli_query($sqlstr,$conn);
		echo "Simpan Buku Tamu Berhasil Dilakukan";
	?>
</body>
</html>