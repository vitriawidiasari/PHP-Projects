<?php
include "koneksi.php";
koneksidb();
$id = $_GET['id'];
$sql = mysql_query("select * from berita where id_berita='$id' or judul_seo='$id'");
while ($row = mysql_fetch_array($sql))
{
  echo "<h1>".$row['judul_berita']."</h1>";
  echo "<p>".$row['isi_berita']."</p>";
}
?>
