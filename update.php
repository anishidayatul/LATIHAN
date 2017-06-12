<html>
<body>
<?php
include_once("koneksi.php");
$update=mysql_query("update barang set nama = 'komputer' where kode=001");
echo"<br><br>";
if($update)
{echo"berhasil mengupdate data pada tabel barang";}
else
{echo"gagal mengupdate data";}
?>
</body>
</html>
