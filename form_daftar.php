<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>

<body>
<center>
<p><h1><font color='blue'>Selamat Datang di</font></p></h1>
<p><h2>PT. Jaya Raya Makmur Merdeka</p></h2>
<p><h3><font color='green'>Registrasi Internet Hotspot Tamu Terhormat</font></p></h3>
<p><h4><i>Silahkan mengisi Nama dan Nomor Handphone anda:</i></p></h4>
        <form name ="register_form" class="form-signin" role="form" action="create.php" method="POST">
          <input type="text" name="nama" class="form-control username input-top" placeholder="Nama" required autofocus>
          <input type="text" name="nomorhp" class="form-control password input-bottom" placeholder="Nomor Handphone">	   
          <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
        </form>

<?php
require "koneksi.php";
	//Menampilkan data
    $list = mysql_query( 'SELECT * FROM new_user ORDER BY id DESC', $conn );
	$totaldata = mysql_num_rows($list);
	
	if (mysql_num_rows($list) > 0)
	{

		echo "<br>";     
		 echo "<br>";     
		 echo "<p><h4>Jumlah yang mendaftar : ".$totaldata;

		 echo "</br></br><table><tr><th>No</th><th>Tanggal</th><th>Kode PIN</th><th>Nama</th><th>Nomor HP</th><th>Aksi</th></tr>";
		    $no = 0;
		 while($row = mysql_fetch_array($list)) 
		 {
			$no++;

			echo "<tr>
			<td>$no</td>
			<td>$row[tanggal]</td>
			<td>$row[id]</td>
			<td>$row[nama]</td>
			<td>$row[nomorhp]</td>
			<td>
			<a href='del.php?id=$row[id]'>Del</a> | 
			<a href='form_edit.php?id=$row[id]'>Edit</a>
			</td>

			</tr>";	 
		 }
		 echo "</table>";
	} 
?>  
</center>
</body>
</html>