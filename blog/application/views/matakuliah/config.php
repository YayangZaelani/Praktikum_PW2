<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbelen";
// Koneksi ke database agar dapat menggunakan query select didalam view 
$connect = mysqli_connect($server,$username,$password,$database) or die ("Gagal");
?>