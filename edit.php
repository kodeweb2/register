<?php
require "koneksi.php";
$nama = $_POST['nama'];
$nomorhp = $_POST['nomorhp'];
echo "<html>";
	//Mengubah data
		$qedit = "UPDATE new_user SET nama='$_POST[nama]',nomorhp='$_POST[nomorhp]' WHERE id='$_POST[id]'";
		mysql_query($qedit,$conn);

		echo "<div class='my-block'><font color='green'><p><h2>Data Bapak/Ibu: <font color='red'>$nama</font>Berhasil diubah!!!</h2>";
		echo "</br><a href='http://localhost/register/form_daftar.php'><font color='blue'>[ Kembali ke Halaman Registrasi ]</font></a></div>";
	
mysql_close();

echo "</html>";




?>

