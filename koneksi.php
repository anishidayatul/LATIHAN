<html>
<head>
<title>Contoh Koneksi Database</title>
</head>
<body>
<b>
<?php
$host='localhost';
$username='root';
$password='';
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
     {echo"Koneksi server berhasil <br><br>";}
else
     {echo"gagal koneksi ke server<br><br>";}
	 
$database='db_inventory(ans)';
$mydb=mysql_select_db($database,$koneksi);
if($mydb)
     {echo"Berhasil memilih database";}
else
     {echo"Tidak dapat memilih database";}
	 
?>	 
</body>
</html>