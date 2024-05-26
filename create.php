<?php
require "koneksi.php";
$nama = $_POST['nama'];
$nomorhp = $_POST['nomorhp'];
echo "<html>";
	//Mengisi data
		$query = "INSERT INTO new_user(nama,nomorhp) VALUES ('$nama','$nomorhp')";
		mysql_query($query,$conn);
		

		echo "<div class='my-block'><font color='green'><p><h2>Selamat Bapak/Ibu: <font color='red'>$nama</font> pendaftaran berhasil dilakukan </h2></p>";
		echo "</br><a href='http://localhost/register/form_daftar.php'><font color='blue'>[ Kembali ke Halaman Registrasi ]</font></a></div>";
	
mysql_close();

echo "</html>";




?>

