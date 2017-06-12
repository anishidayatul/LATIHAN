<html>
<body>
<?php
include_once("koneksi.php");
$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jml,pokok,jual)
         VALUES ('001','komputer','elektronik','3','2500000','3000000'),
		 ('002','komputer','elektronik','3','2500000','3000000'),
		 ('003','televisi','elektronik','3','2500000','3000000'),
		 ('004','laptobe','elektronik','3','2500000','3000000'),
		 ('005','ac','elektronik','3','2500000','3000000'),
		 ('006','dvd','elektronik','3','2500000','3000000'),
		 ('007','setrika','elektronik','3','2500000','3000000'),
		 ('008','hp','elektronik','3','2500000','3000000'),
		 ('009','ricecooker','elektronik','3','2500000','3000000'),
		 ('0010','kulkas','elektronik','3','2500000','3000000'),
		 ('0011','mesin cuci','elektronik','3','2500000','3000000')");
		 
echo"<br><br>";		 
if($insert)
{echo"berhasil menyisipkan data pada tabel barang";}
else
{echo"gagal penyisipan data";}
?>
</body>
</html>
