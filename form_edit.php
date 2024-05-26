<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>

<body>
<?php
require "koneksi.php";
	//Form Mengubah data
	$qget = "SELECT * FROM new_user WHERE id='$_GET[id]'";
	$qdata = mysql_query($qget,$conn);
	$panggil = mysql_fetch_array($qdata);

?> 
<center>
<p><h3><font color='green'>Registrasi Internet Hotspot Tamu Terhormat</font></p></h3>
<p><h4><i>Silahkan Masukkan Data Nama & No Handphone Baru:</i></p></h4>

<form name ="edit_form" class="form-signin" role="form" action="edit.php" method="POST">
		 <input type="text" name="id" value="<?php echo $panggil['id']; ?>">	
		 <input type="text" name="nama" value="<?php echo $panggil['nama']; ?>">	
          <input type="text" name="nomorhp" value="<?php echo $panggil['nomorhp']; ?>">	   
          <button class="btn btn-lg btn-primary btn-block" name="proses" type="submit">Ubah</button>
        </form>

</center>

</body>
</html>