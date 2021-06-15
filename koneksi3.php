<?php
//buat koneksi dengan MySQL
$link=mysqli_connect('localhost','root','');
  
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
  
//buat database dbmahasiswa
$result=mysqli_query($link,'CREATE DATABASE dbsmartphone');
if (!$result)
{
   die("Database smartphone gagal dibuat");
}
  
//gunakan database dbmahasiswa
$result=mysqli_query($link,'USE dbsmartphone');
if (!$result)
{
   die("Database smartphone gagal digunakan");
}
  
//buat tabel mahasiswa
$query = "CREATE TABLE smartphone (KDHP CHAR(9) NOT NULL PRIMARY KEY, 
NAMA_HP varchar(20), harga INT, kuantitas INT)";
$result=mysqli_query($link,$query);
if (!$result)
{
   die("Tabel smartphone gagal dibuat");
}
  
//tambahkan data ke dalam tabel mahasiswa
$query="INSERT INTO smartphone VALUES ('A001', 'Xiaomi Redmi 4X', 825000, 2)";
mysqli_query($link,$query);
  
$query="INSERT INTO smartphone VALUES ('A002', 'Xiaomi Redmi Note 8', 2100000, 3)";
mysqli_query($link,$query);
  
$query="INSERT INTO smartphone VALUES ('A003', 'OPPO F11', 3500000, 1)";
mysqli_query($link,$query);
  
$query="INSERT INTO smartphone VALUES ('A004', 'Real Me 5', 1900000, 2)";
mysqli_query($link,$query);
  
$query="INSERT INTO smartphone VALUES ('A005', 'Samsung Galaxy A50', 3500000, 4)";
mysqli_query($link,$query);
  
echo "Database Tabel smartphone berhasil dibuat";
?>
