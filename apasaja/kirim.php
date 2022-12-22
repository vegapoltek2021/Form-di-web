<?php
$variabel1=$_GET["nama"];
$sandi=$_GET["sandi"];

$koneksi=new mysqli ("localhost","root","","latihan1");
if($koneksi -> connect_errno){
	echo"Gagal koneksi";
	exit();
	echo $koneksi -> connect_error;
}
$data1= "tif1a";
$data2= "angkatan2021";
//$query=$koneksi-> query("select *from pengguna where nama=".$variabel1."AND sandi= ".$sandi);
if($variabel1==$data1&&$sandi==$data2){
	echo"<H1><center> SELAMAT DATANG <br>".
	$variabel1."</center></H1>";
}else {
	header("location: http://localhost/apasaja/text.html");
}