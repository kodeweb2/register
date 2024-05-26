<?php
require "koneksi.php";	
echo "<html>";
	//Menghapus data
		$qdel = "DELETE FROM new_user WHERE id='$_GET[id]'";
		mysql_query($qdel,$conn);
		

		echo "<div class='my-block'><font color='red'><p><h2>Data Berhasil dihapus!!!</h2></p></font>";
		echo "</br><a href='http://localhost/register/form_daftar.php'><font color='blue'>[ Kembali ke Halaman Registrasi ]</font></a></div>";
	
mysql_close();

echo "</html>";




?>

