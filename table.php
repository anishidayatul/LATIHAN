<html>
<body>
<?php
include_once("koneksi.php");
$tabel=mysql_query("CREATE TABLE IF NOT EXISTS barang(
kode VARCHAR(15) NOT NULL,
nama VARCHAR(25) NOT NULL,
kategori VARCHAR(30) NOT NULL,
jml VARCHAR(10) NOT NULL,
pokok VARCHAR(20) NOT NULL,
jual VARCHAR(20) NOT NULL,
PRIMARY KEY(kode))");

echo"<br><br>";	
if($tabel)
   {echo"Berhasil membuat table tamu melalui script php";} 
else
   {echo"Gagal membuat table";}	 
?>	 
</body>
</html>