<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b8613ec2d3dfa6";
$pass = "1d61e329";
$name = "somadwebappdb";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
