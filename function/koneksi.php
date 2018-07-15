<?php
	
	$server = "localhost";
	$username = "root";
	$passwd = "";
	$db = "ecommerce";
	
	$koneksi = mysqli_connect($server, $username, $passwd, $db) or die ("Koneksi ke database gagal");
	
?>