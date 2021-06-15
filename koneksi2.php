<?php
//buat koneksi dengan MySQL
$link=mysqli_connect('localhost','root','');
 
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
   {
   die("Koneksi dengan MySQL gagal");
   }
 
//jalankan query
$result=mysqli_query($link,'SHOW DATABASES');
$x=1;
//tampilkan hasil query
while ($row = mysqli_fetch_row($result)) 
   {
     echo $x++." ".$row[0];
     echo "<br />";
   }
?>
