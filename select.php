<html>
<body>
<table border="1">
<tr bgcolor="#CCCCCC">
    <td>No</td>
    <td>Nama</td>
    <td>kategori</td>
    <td>jual</td>
</tr>
<?php
include_once("koneksi.php");
$selectview=mysql_query("select kode,nama,kategori,jml,pokok,jual
            from barang order by kode,nama asc");
while($data=mysql_fetch_array($selectview))
{   echo"<tr>
    <td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
  </tr>";
}
?>
</table>
</body>
</html>
