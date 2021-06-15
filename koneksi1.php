<?php
$link=mysqli_connect('localhost','root','');
if ($link){
	echo "Koneksi dengan MySQL berhasil";
}
else{
	echo "Koneksi dengan MySql gagal" ;
}
?>